<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHome2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home2s', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("subtitle");
            $table->string("src");
            $table->string("paragraph1");
            $table->string("paragraph2");
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
        Schema::dropIfExists('home2s');
    }
}
