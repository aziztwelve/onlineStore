<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelfordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selforders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('telephone');
            $table->string('name');
            // $table->text('address');
            $table->date('date');
            $table->time('datetime');
            $table->text('comment');
            $table->text('cart');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selforders');
    }
}
