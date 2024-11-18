<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property int $price
 * @property string $description
 * @property string $img
 * @property string|null $img_second
 * @property string|null $img_third
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';

	protected $casts = [
		'category_id' => 'int',
		'price' => 'int'
	];

	protected $fillable = [
		'category_id',
		'name',
		'price',
		'description',
		'img',
		'img_second',
		'img_third',
		'status'
	];
}
