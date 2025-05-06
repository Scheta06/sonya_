<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            // Первичный ключ
            $table->id();
            
            // Основные поля
            $table->date('date');
            $table->enum('status', ['new', 'processing', 'shipped', 'delivered', 'cancelled'])->default('new');
            $table->enum('payment', ['cash', 'card']);
            $table->string('delivery', 45);
            $table->decimal('amountorder', 45, 2);
            $table->foreignId('user_id')->references('id')->on('users'); 
            $table->integer('quantity');
            
            // Таймстампы
            $table->timestamps();
            
        });
    }

    public function down()
    {        
        Schema::dropIfExists('orders');
    }
};