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
        Schema::table('users', function (Blueprint $table) {
            
        $table->string('usertype')->default(0);
        $table->string('phone')->nullable();
        $table->string('address');
        $table->string('gender');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::create('users', function (Blueprint $table) {
        $table->dropColumn('usertype');
        $table->dropColumn('phone');
        $table->dropColumn('address');
        $table->dropColumn('gender');
    });
    }
};
