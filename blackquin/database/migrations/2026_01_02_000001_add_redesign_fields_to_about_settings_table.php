<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRedesignFieldsToAboutSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('about_settings', function (Blueprint $table) {
            $table->string('hero_title_line1')->nullable();
            $table->string('hero_title_line2')->nullable();
            $table->text('hero_description')->nullable();

            $table->string('vision_kicker')->nullable();
            $table->string('vision_title')->nullable();
            $table->text('vision_description')->nullable();
            $table->string('vision_label')->nullable();
            $table->text('vision_statement')->nullable();

            $table->string('value1_title')->nullable();
            $table->text('value1_description')->nullable();
            $table->string('value2_title')->nullable();
            $table->text('value2_description')->nullable();
            $table->string('value3_title')->nullable();
            $table->text('value3_description')->nullable();
            $table->string('value4_title')->nullable();
            $table->text('value4_description')->nullable();

            $table->string('beliefs_kicker')->nullable();
            $table->string('beliefs_title')->nullable();
            $table->string('belief1_title')->nullable();
            $table->text('belief1_description')->nullable();
            $table->string('belief2_title')->nullable();
            $table->text('belief2_description')->nullable();
            $table->string('belief3_title')->nullable();
            $table->text('belief3_description')->nullable();
            $table->string('belief4_title')->nullable();
            $table->text('belief4_description')->nullable();

            $table->string('leadership_kicker')->nullable();
            $table->text('leadership_description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('about_settings', function (Blueprint $table) {
            $table->dropColumn([
                'hero_title_line1', 'hero_title_line2', 'hero_description',
                'vision_kicker', 'vision_title', 'vision_description', 'vision_label', 'vision_statement',
                'value1_title', 'value1_description', 'value2_title', 'value2_description',
                'value3_title', 'value3_description', 'value4_title', 'value4_description',
                'beliefs_kicker', 'beliefs_title',
                'belief1_title', 'belief1_description', 'belief2_title', 'belief2_description',
                'belief3_title', 'belief3_description', 'belief4_title', 'belief4_description',
                'leadership_kicker', 'leadership_description',
            ]);
        });
    }
}
