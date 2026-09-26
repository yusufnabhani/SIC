<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',

        'banner_img',
        'banner_title',
        'banner_desc',

    	'meta_title',
    	'meta_description',
    	'slug',
    	'breadcrumbs_anchor',

    	'about_subtitle',
    	'about_title',
    	'about_description',
    	'about_buttontext',
    	'about_buttonlink',
    	'about_image',
    	'about_ytlink',
        'member_title_section',

        'hero_title_line1', 'hero_title_line2', 'hero_description',
        'vision_kicker', 'vision_title', 'vision_description', 'vision_label', 'vision_statement',
        'value1_title', 'value1_description', 'value2_title', 'value2_description',
        'value3_title', 'value3_description', 'value4_title', 'value4_description',
        'beliefs_kicker', 'beliefs_title',
        'belief1_title', 'belief1_description', 'belief2_title', 'belief2_description',
        'belief3_title', 'belief3_description', 'belief4_title', 'belief4_description',
        'leadership_kicker', 'leadership_description',
 	];
}
