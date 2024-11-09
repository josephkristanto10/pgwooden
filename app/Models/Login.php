<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Login
 * 
 * @property int $id
 * @property string $user
 * @property string $password
 *
 * @package App\Models
 */
class Login extends Model
{
	protected $table = 'login';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'user',
		'password'
	];
}
