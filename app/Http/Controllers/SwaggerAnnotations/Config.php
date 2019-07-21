<?php
namespace App\Http\Controllers\SwaggerAnnotations;
/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Riffagro OpenApi",
 *      description="L5 Swagger OpenApi description",
 * )
 */
/**
 *  @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="L5 Swagger Open localhost api server"
 *  )
 *
 *  @OA\Server(
*      url="https://projects.dev/api/v1",
 *      description="L5 Swagger OpenApi Server"
 * )
 */
 
/**
* @OA\SecurityScheme(
 *     type="http",
 *     in="header",
 *     name="Authorization",
 *     securityScheme="bearerAuth",
 *     scheme="bearer",
 *     bearerFormat="JWT" 
 *     
 * )
 */