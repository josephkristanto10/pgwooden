<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Testimony
 * 
 * @property int $id
 * @property string $img
 * @property string $title
 * @property int $rating
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Testimony extends Model
{
	protected $table = 'testimony';

	protected $casts = [
		'rating' => 'int'
	];

	protected $fillable = [
		'img',
		'title',
		'rating',
		'status'
	];
}
