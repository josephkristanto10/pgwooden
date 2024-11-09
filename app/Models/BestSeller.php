<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BestSeller
 * 
 * @property int $id
 * @property string $id_product
 * @property int $order_number
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class BestSeller extends Model
{
	protected $table = 'best_seller';

	protected $casts = [
		'order_number' => 'int'
	];

	protected $fillable = [
		'id_product',
		'order_number'
	];
}
