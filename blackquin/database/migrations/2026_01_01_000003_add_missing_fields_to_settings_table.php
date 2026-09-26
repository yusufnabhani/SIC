<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingFieldsToSettingsTable extends Migration
{
    /**
     * These fields are referenced throughout the Blade views (layouts/front.blade.php,
     * schema.org block, etc.) but were never part of any migration — the original
     * project's live database had drifted from its migrations. Adding them here so a
     * fresh install actually has the columns the views expect.
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('author')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('price_range')->nullable();
            $table->string('font')->nullable();
            $table->boolean('loader_status')->default(0);
            $table->boolean('maintenance_status')->default(0);
            $table->text('maintenance_text')->nullable();
            $table->boolean('whatsapp')->default(0);
            $table->text('custom_css')->nullable();
            $table->text('custom_js')->nullable();
            $table->string('loader_img')->nullable();
            $table->string('loader_color')->nullable();
        });
    }

    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn([
                'address', 'contact', 'author', 'phone', 'country', 'price_range', 'font',
                'loader_status', 'maintenance_status', 'maintenance_text', 'whatsapp',
                'custom_css', 'custom_js', 'loader_img', 'loader_color',
            ]);
        });
    }
}
