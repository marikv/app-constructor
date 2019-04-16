<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

/**
 * Class CalculateController
 * @package App\Http\Controllers\API
 */
class CalculateController extends BaseController
{
	/**
	 * calculator
	 *
	 * @return \Illuminate\Http\Response
	 *
	 *
	 *
	 * @SWG\Post(
	 *     path="/calc",
	 *     description="mobile_applications",
	 *      summary="mobile_applications",
	 *      tags={"calculator"},
	 *      consumes={"application/json"},
	 *      produces={"application/json"},
	 *      @SWG\Parameter(
	 *          name="body",
	 *          in="body",
	 *          description="JSON for calculation",
	 *          required=true,
	 *          format="application/json",
	 *          @SWG\Schema(
	 *              type="object",
	 *              @SWG\Property(property="AppConstructor", type="string", example="111111"),
	 *              @SWG\Property(property="eeeeeeeee", type="string", example="rrrrrrrr"),
	 *              @SWG\Property(property="rrrrr", type="integer", example=12),
	 *              @SWG\Property(property="ttttttt", type="object",
	 *     				@SWG\Items(
	 *
	 * 					)
	 * 				),
	 *          )
	 *      ),
	 *
	 *     @SWG\Response(
	 *         response=200,
	 *         description="OK",
	 *     ),
	 *     @SWG\Response(
	 *         response=422,
	 *         description="Missing Data"
	 *     )
	 * )
	 */
	public function calc()
	{
		return $this->sendResponse(["premiumSum" => 123456, "premiumValuta" => "RUR"], 'calculation was retrieved successfully.');
	}
}