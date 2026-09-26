<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRedesignFieldsToHomeSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('home_settings', function (Blueprint $table) {
            $table->string('hero_kicker')->nullable();
            $table->string('hero_title_line1')->nullable();
            $table->string('hero_title_line2')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('hero_button1_text')->nullable();
            $table->string('hero_button1_link')->nullable();
            $table->string('hero_button2_text')->nullable();
            $table->string('hero_button2_link')->nullable();

            $table->string('value1_title')->nullable();
            $table->string('value2_title')->nullable();
            $table->string('value3_title')->nullable();
            $table->string('value4_title')->nullable();

            $table->string('story_kicker')->nullable();
            $table->string('story_title')->nullable();
            $table->text('story_description')->nullable();
            $table->string('story_image')->nullable();
            $table->string('story_video_link')->nullable();

            $table->string('partner_kicker')->nullable();
            $table->string('partner_title')->nullable();
            $table->text('partner_description')->nullable();
            $table->string('partner_image')->nullable();
            $table->string('partner_point1_title')->nullable();
            $table->string('partner_point1_text')->nullable();
            $table->string('partner_point2_title')->nullable();
            $table->string('partner_point2_text')->nullable();
            $table->string('partner_buttontext')->nullable();
            $table->string('partner_buttonlink')->nullable();

            $table->string('insights_kicker')->nullable();

            $table->string('process_kicker')->nullable();
            $table->string('process_title')->nullable();
            $table->text('process_description')->nullable();
            $table->string('step1_title')->nullable();
            $table->text('step1_description')->nullable();
            $table->string('step1_linktext')->nullable();
            $table->string('step1_linkurl')->nullable();
            $table->string('step2_title')->nullable();
            $table->text('step2_description')->nullable();
            $table->string('step2_linktext')->nullable();
            $table->string('step2_linkurl')->nullable();
            $table->string('step3_title')->nullable();
            $table->text('step3_description')->nullable();
            $table->string('step3_linktext')->nullable();
            $table->string('step3_linkurl')->nullable();

            $table->string('cta_title_line1')->nullable();
            $table->string('cta_title_line2')->nullable();
            $table->string('cta_buttontext')->nullable();
            $table->string('cta_buttonlink')->nullable();
        });
    }

    public function down()
    {
        Schema::table('home_settings', function (Blueprint $table) {
            $table->dropColumn([
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
            ]);
        });
    }
}
