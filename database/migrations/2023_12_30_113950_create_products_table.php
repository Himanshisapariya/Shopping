<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('status')->default(1);
            $table->string('featured')->default(1);
            $table->string('trendy')->default(1);
            $table->integer('price');
            $table->integer('compareprice')->default(0);
            $table->integer('quantity');
            $table->text('description');
            $table->foreignId('category_id')->constrained()->ondelete('cascade');
            $table->foreignId('brand_id')->constrained()->ondelete('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
