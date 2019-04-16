<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

/**
 * Class BaseController
 * @package App\Http\Controllers\API
 *
 * @SWG\Swagger(
 *   schemes={"https", "http"},
 *   host="localhost:8000",
 *   basePath="/api/",
 *   @SWG\Info(
 *     title="App Constructor",
 *     description="Top Insurance APIs (a REST API for AppConstructor)",
 *     version="1.0.0"
 *   )
 * )
 */

class BaseController extends Controller
{
	/**
	 * success response method.
	 *
	 * @param $result
	 * @param $message
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function sendResponse($result, $message)
	{
		$response = [
			'success' => true,
			'data'    => $result,
			'message' => $message,
		];


		return response()->json($response, 200);
	}


	/**
	 * return error response.
	 *

	 * @param $error
	 * @param array $errorMessages
	 * @param int $code
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function sendError($error, $errorMessages = [], $code = 404)
	{
		$response = [
			'success' => false,
			'message' => $error,
		];


		if(!empty($errorMessages)){
			$response['data'] = $errorMessages;
		}


		return response()->json($response, $code);
	}
}