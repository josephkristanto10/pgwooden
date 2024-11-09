<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Portofolio
 * 
 * @property int $id
 * @property string $name
 * @property string $img
 * @property string $description
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Portofolio extends Model
{
	protected $table = 'portofolio';

	protected $fillable = [
		'name',
		'img',
		'description',
		'status'
	];
}
