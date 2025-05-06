<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->text('description')->nullable();
            $table->decimal('price', 24, 8);
            $table->string('presence', 45)->nullable();
            $table->string('brand', 45)->nullable();
            $table->string('material', 45)->nullable();
            $table->string('size', 8)->nullable();
            $table->string('color', 45)->nullable();
            $table->string('photo', 255)->nullable();
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('location_id')->references('id')->on('locations');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('goods');
    }
};