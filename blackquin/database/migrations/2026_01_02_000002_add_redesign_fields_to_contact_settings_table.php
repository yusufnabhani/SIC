<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRedesignFieldsToContactSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('contact_settings', function (Blueprint $table) {
            $table->string('hero_title_line1')->nullable();
            $table->string('hero_title_line2')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('side_kicker')->nullable();
            $table->string('side_title_line1')->nullable();
            $table->string('side_title_line2')->nullable();
            $table->string('warehouse_address')->nullable();
            $table->string('hours_line1')->nullable();
            $table->string('hours_line2')->nullable();
            $table->string('map_link')->nullable();
        });
    }

    public function down()
    {
        Schema::table('contact_settings', function (Blueprint $table) {
            $table->dropColumn([
                'hero_title_line1', 'hero_title_line2', 'hero_description',
                'side_kicker', 'side_title_line1', 'side_title_line2',
                'warehouse_address', 'hours_line1', 'hours_line2', 'map_link',
            ]);
        });
    }
}
