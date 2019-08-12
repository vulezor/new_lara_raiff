<?php
namespace App\Http\Controllers\SwaggerAnnotations;
 /**
 * @OA\Post(
 *      path="/api/register",
 *      operationId="registerUser",
 *      tags={"Auth"},
 *      summary="Register User",
 *      description="Register User",
 *      @OA\Parameter(
 *          name="name",
 *          description="Name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              format="text"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="last_name",
 *          description="Last Name",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              format="text"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="email",
 *          description="Email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              format="email"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="password",
 *          description="Password",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              format="password"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="password_confirmation",
 *          description="Pasword Confirmation",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              format="password"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *      ),
 *      @OA\Response(response=500, description="Internal Server Error", @OA\JsonContent()),
 *      @OA\Response(response=400, description="Bad request", @OA\JsonContent()),
 *      @OA\Response(response=401, description="Not Authorized", @OA\JsonContent()),
 *      @OA\Response(response=404, description="Resource Not Found", @OA\JsonContent())
 *)
 */
/** 
 * @OA\Post(
 *      path="/api/login",
 *      operationId="loginUser",
 *      tags={"Auth"},
 *      summary="Return user information with token",
 *      description="Return user information with token",
 *      @OA\Parameter(
 *          name="email",
 *          description="Email",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              format="email"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="password",
 *          description="Password",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string",
 *              format="password"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *      ),
 *      @OA\Response(response=500, description="Internal Server Error", @OA\JsonContent()),
 *      @OA\Response(response=400, description="Bad request", @OA\JsonContent()),
 *      @OA\Response(response=401, description="Not Authorized", @OA\JsonContent()),
 *      @OA\Response(response=404, description="Resource Not Found", @OA\JsonContent())
 *     
 * )
 */

 /**
 * @OA\Get(
 *      path="/api/get_current_user",
 *      operationId="getCurrentUser",
 *      tags={"Auth"},
 *      summary="Get current user",
 *      description="Returns User data",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation", @OA\JsonContent()
 *       ),
 *      @OA\Response(response=400, description="Bad request", @OA\JsonContent()),
 *      @OA\Response(response=500, description="Internal Server Error", @OA\JsonContent()),
 *      @OA\Response(response=401, description="Not Authorized", @OA\JsonContent()),
 *      @OA\Response(response=404, description="Resource Not Found",@OA\JsonContent()),
 *      security={
 *           {"bearerAuth": {}}
 *       }
 *     
 * )
 */


 /**
 * @OA\Get(
 *      path="/api/test/{id}",
 *      operationId="getUserById",
 *      tags={"Test"},
 *      summary="Get user information",
 *      description="Returns User data",
 *      @OA\Parameter(
 *          name="id",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation", @OA\JsonContent()
 *       ),
 *      @OA\Response(response=400, description="Bad request", @OA\JsonContent()),
 *      @OA\Response(response=500, description="Internal Server Error", @OA\JsonContent()),
 *      @OA\Response(response=401, description="Not Authorized", @OA\JsonContent()),
 *      @OA\Response(response=404, description="Resource Not Found",@OA\JsonContent()),
 *      security={
 *           {"bearerAuth": {}}
 *       }
 *     
 * )
 */

 /**
 * @OA\Post(
 *      path="/api/insert_roles",
 *      operationId="setUsersRole",
 *      tags={"Test"},
 *      summary="insert roles information",
 *      description="insert roles information",
 *      @OA\Response(response=200, description="successful operation"),
 *      @OA\Response(response=500, description="Internal Server Error", @OA\JsonContent()),
 *      @OA\Response(response=400, description="Bad request",@OA\JsonContent()),
 *      @OA\Response(response=401, description="Not Authorized"),
 *      @OA\Response(response=404, description="Resource Not Found", @OA\JsonContent()),
 *      security={
 *           {"bearerAuth": {}}
 *       }
 * )
 */