<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
    	'meta_title',
    	'meta_description',

    	'fun_title',
    	'fun_description',
        'count_icon1',
        'count_number1',
    	'count_description1',
        'count_icon2',
    	'count_number2',
		'count_description2',
        'count_icon3',
    	'count_number3',
    	'count_description3',
        'count_icon4',
    	'count_number4',
    	'count_description4',

    	'about_subtitle',
    	'about_title',
    	'about_description',
    	'about_buttontext',
    	'about_buttonlink',
    	'about_image1',
        'about_image1_titlu1',
        'about_image1_titlu2',
    	'about_image2',
        'about_image2_titlu1',
        'about_image2_titlu2',
        'about_image3',
        'about_image3_titlu1',
        'about_image3_titlu2',
    	'about_yearstitle',
    	'about_yearstext',

    	'services_title',
        'sevices_text',

        'testimonial_title',
        'testimonial_subtitle',

    	'projects_title',
    	'projects_subtitle',

    	'blog_title',
    	'blog_subtitle',

        'hero_kicker', 'hero_title_line1', 'hero_title_line2', 'hero_description', 'hero_image',
        'hero_button1_text', 'hero_button1_link', 'hero_button2_text', 'hero_button2_link',
        'value1_title', 'value2_title', 'value3_title', 'value4_title',
        'story_kicker', 'story_title', 'story_description', 'story_image', 'story_video_link',
        'partner_kicker', 'partner_title', 'partner_description', 'partner_image',
        'partner_point1_title', 'partner_point1_text', 'partner_point2_title', 'partner_point2_text',
        'partner_buttontext', 'partner_buttonlink', 'insights_kicker',
        'process_kicker', 'process_title', 'process_description',
        'step1_title', 'step1_description', 'step1_linktext', 'step1_linkurl',
        'step2_title', 'step2_description', 'step2_linktext', 'step2_linkurl',
        'step3_title', 'step3_description', 'step3_linktext', 'step3_linkurl',
        'cta_title_line1', 'cta_title_line2', 'cta_buttontext', 'cta_buttonlink',
	];
}
