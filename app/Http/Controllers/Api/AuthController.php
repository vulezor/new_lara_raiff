<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Http\Resources\Users as UserResource;
use Laravel\Passport\HasApiTokens;
class AuthController extends Controller
{
    
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
            $accessToken = $user->createToken('authToken')->accessToken;
            return response(['user'=>$user, 'token'=>$accessToken]);
    }

    public function login(Request $request){
        $loginData = $request->validate(
            [
                'email'=>'email|required',
                'password'=>'required'
            ]);

            if(!auth()->attempt($loginData)){
                return response(['message'=>'Invalid cerdentials']);
            }

            $accessToken = auth()->user()->createToken('authToken')->accessToken;

            return response(['user'=>auth()->user(), 'access_token'=>$accessToken]);
    }

    public function logout(Request $request){
        auth()->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function test(){
        return new UserResource(User::find(1));
        
    }

    public function insert_roles(){
        $user = User::find(1);
          

        $numbers = [1,2,3];
        foreach ($numbers as $number) {
            $user->roles()->attach($number);
        }
        
         return response($user->roles);
    }
}

