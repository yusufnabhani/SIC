<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('page_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id')->nullable();

            $table->string('approach_hero_eyebrow')->nullable();
            $table->string('approach_hero_title_line1')->nullable();
            $table->string('approach_hero_title_accent')->nullable();
            $table->text('approach_hero_description')->nullable();
            $table->string('approach_work_eyebrow')->nullable();
            $table->string('approach_work_title')->nullable();
            $table->text('approach_work_description')->nullable();
            $table->string('approach_step1_title')->nullable();
            $table->text('approach_step1_description')->nullable();
            $table->string('approach_step2_title')->nullable();
            $table->text('approach_step2_description')->nullable();
            $table->string('approach_step3_title')->nullable();
            $table->text('approach_step3_description')->nullable();
            $table->string('approach_step4_title')->nullable();
            $table->text('approach_step4_description')->nullable();
            $table->string('approach_value_eyebrow')->nullable();
            $table->string('approach_value_title')->nullable();
            $table->text('approach_value_description1')->nullable();
            $table->text('approach_value_description2')->nullable();
            $table->string('approach_value_buttontext')->nullable();

            $table->string('quality_hero_eyebrow')->nullable();
            $table->string('quality_hero_title_line1')->nullable();
            $table->string('quality_hero_title_accent')->nullable();
            $table->text('quality_hero_description')->nullable();
            $table->string('quality_system_eyebrow')->nullable();
            $table->string('quality_system_title')->nullable();
            $table->text('quality_system_description1')->nullable();
            $table->text('quality_system_description2')->nullable();
            $table->string('quality_pillars_eyebrow')->nullable();
            $table->string('quality_pillars_title')->nullable();
            $table->string('quality_pillar1_title')->nullable();
            $table->text('quality_pillar1_description')->nullable();
            $table->string('quality_pillar2_title')->nullable();
            $table->text('quality_pillar2_description')->nullable();
            $table->string('quality_pillar3_title')->nullable();
            $table->text('quality_pillar3_description')->nullable();
            $table->string('quality_pillar4_title')->nullable();
            $table->text('quality_pillar4_description')->nullable();
            $table->string('quality_partnership_eyebrow')->nullable();
            $table->string('quality_partnership_title')->nullable();
            $table->text('quality_partnership_description')->nullable();
            $table->string('quality_partnership_buttontext')->nullable();

            $table->string('careers_hero_eyebrow')->nullable();
            $table->string('careers_hero_title_line1')->nullable();
            $table->string('careers_hero_title_accent')->nullable();
            $table->text('careers_hero_description')->nullable();
            $table->string('careers_departments')->nullable();
            $table->string('careers_empty_eyebrow')->nullable();
            $table->string('careers_empty_title')->nullable();
            $table->text('careers_empty_description')->nullable();
            $table->string('careers_empty_buttontext')->nullable();

            $table->string('quote_hero_eyebrow')->nullable();
            $table->string('quote_hero_title_line1')->nullable();
            $table->string('quote_hero_title_accent')->nullable();
            $table->text('quote_hero_description')->nullable();
            $table->string('quote_side_eyebrow')->nullable();
            $table->string('quote_side_title')->nullable();
            $table->string('quote_step1_title')->nullable();
            $table->text('quote_step1_description')->nullable();
            $table->string('quote_step2_title')->nullable();
            $table->text('quote_step2_description')->nullable();
            $table->string('quote_step3_title')->nullable();
            $table->text('quote_step3_description')->nullable();
            $table->string('quote_side_note_label')->nullable();
            $table->string('quote_side_note_linktext')->nullable();
            $table->string('quote_form_title')->nullable();
            $table->string('quote_form_note')->nullable();

            $table->string('faq_hero_eyebrow')->nullable();
            $table->string('faq_hero_title_line1')->nullable();
            $table->string('faq_hero_title_accent')->nullable();
            $table->text('faq_hero_description')->nullable();
            $table->string('faq_side_title')->nullable();
            $table->text('faq_side_description')->nullable();
            $table->string('faq_side_buttontext')->nullable();

            $table->string('sitemap_hero_eyebrow')->nullable();
            $table->string('sitemap_hero_title_line1')->nullable();
            $table->string('sitemap_hero_title_accent')->nullable();
            $table->text('sitemap_hero_description')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_settings');
    }
}
