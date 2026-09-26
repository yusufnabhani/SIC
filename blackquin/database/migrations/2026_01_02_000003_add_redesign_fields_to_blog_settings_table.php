<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRedesignFieldsToBlogSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('blog_settings', function (Blueprint $table) {
            $table->string('hero_title_line1')->nullable();
            $table->string('hero_title_line2')->nullable();
            $table->text('hero_description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('blog_settings', function (Blueprint $table) {
            $table->dropColumn(['hero_title_line1', 'hero_title_line2', 'hero_description']);
        });
    }
}
