<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Exceptions\Handler;
use App\Http\Resources\Users as UserResource;
use Laravel\Passport\HasApiTokens;
use App\Http\Controllers\SwaggerAnnotations;
use Carbon\Carbon;
use GuzzleHttp;
class AuthController extends Controller
{

    /**
     * @param { Request } $request 
     * @description send user data to register on app
     */
    public function register(Request $request){
        $validatedData = $request->validate(
            [
                'name'=>'required | max:55',
                'last_name'=>'required | max:100',
                'email'=>'email|required|unique:users',
                'password'=>'required|confirmed'
            ]);
            $validatedData['password'] = bcrypt($request->password);
            $user = User::create($validatedData);
            $accessToken = $this->credentials($request);//$user->createToken('authToken')->accessToken;
            return response()->json(['user'=>$user, 'token'=>$accessToken]);
    }

    /**
     * @description Login into the app
     */
    public function login(Request $request){
        $loginData = $request->validate(
            [
                'email'=>'email|required',
                'password'=>'required'
            ]);

            if(!auth()->attempt($loginData)){
                return response(['message'=>'Invalid cerdentials']);
            }

            $accessToken = $this->credentials($request);
            return response(['user'=>getCurrentUser(), 'token_data'=>$accessToken]);
    }

   
    /**
     * @description logout from the app
     */
    public function logout(Request $request){
        auth()->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * @description return current user from database from middleware
     */
    public function getCurrentUser(){
        try{
            return new UserResource(User::find(auth()->user()->id));
        } catch(Exception $e){
            return response()->json($e->ErrorException);
        }  
    }

    public function test($id){
        try{
            return new UserResource(User::find($id));
        } catch(Exception $e){
            return response()->json($e->ErrorException);
        }  
    }

    public function insert_roles(){
        $user = User::find(1);
        $numbers = [1,2,3];
        foreach ($numbers as $number) {
            $user->roles()->attach($number);
        }
         return response()->json($user->roles);
    }

    /**
     * @param { Request } $request
     * @return { object }
     * @description return credential data 
     */
    private function credentials($request){
        $http = new GuzzleHttp\Client;
        $response = $http->post('http://lara.loc/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'uGkrVGPZXiowyOq4VnLbb8m10U8y4UzvUhTHYODU',
                'username' => $request->input('email'),
                'password' => $request->input('password'),
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }

     /**
     * @param { Request } $request
     * @return { object }
     * @description return credential data from refresh token
     */
    public function refreshToken(Request $request){
        $http = new GuzzleHttp\Client;
        $response = $http->post('http://lara.loc/oauth/token', [
            'form_params' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => $request->input('refresh_token'),
                'client_id' => '2',
                'client_secret' => 'uGkrVGPZXiowyOq4VnLbb8m10U8y4UzvUhTHYODU',
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }
}

