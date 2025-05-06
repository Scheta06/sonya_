<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_has_goods', function (Blueprint $table) {
            $table->unsignedInteger('goods_id');
            $table->unsignedInteger('orders_id');
            $table->integer('quantity')->default(1);
            $table->decimal('price_at_order', 10, 2);
            
            $table->primary(['goods_id', 'order_id']);
            
            $table->foreignId('good_id')
                  ->references('id')
                  ->on('goods')
                  ->onDelete('cascade');
                  
            $table->foreignId('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_has_goods');
    }
};