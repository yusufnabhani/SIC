<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category'); // coffee_cocoa | spices | botanicals
            $table->string('botanical_name')->nullable();
            $table->text('description')->nullable();
            $table->string('origin')->nullable();
            $table->string('image')->nullable();
            $table->unsignedSmallInteger('order')->default(0);
            $table->timestamps();
        });

        Schema::create('product_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('origin')->nullable();
            $table->string('processing')->nullable();
            $table->string('screen')->nullable();
            $table->string('grade')->nullable();
            $table->string('moisture')->nullable();
            $table->string('defect_standard')->nullable();
            $table->string('packaging')->nullable();
            $table->unsignedSmallInteger('order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_forms');
        Schema::dropIfExists('products');
    }
}
