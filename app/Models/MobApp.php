<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @SWG\Definition(
 *  definition="InsuranceCompany",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="name",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="code",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="detail",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="full_name",
 *      type="string"
 *  )
 * )
 *
 */
class MobApp extends Model
{
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'mobile_applications';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'code'
	];
}
