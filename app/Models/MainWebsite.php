<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MainWebsite
 * 
 * @property int $id
 * @property string $slogan
 * @property string $img_slogan
 * @property string $sub_slogan
 * @property string $img_about_us
 * @property string $title_about_us
 * @property string $description_about_us
 * @property string $summary_client
 * @property string $summary_project
 * @property string $summary_location
 * @property string $title_tagline
 * @property string $description_tagline
 * @property string $img_tagline
 *
 * @package App\Models
 */
class MainWebsite extends Model
{
	protected $table = 'main_website';
	public $timestamps = false;

	protected $fillable = [
		'slogan',
		'img_slogan',
		'sub_slogan',
		'img_about_us',
		'title_about_us',
		'description_about_us',
		'summary_client',
		'summary_project',
		'summary_location',
		'title_tagline',
		'description_tagline',
		'img_tagline'
	];
}
