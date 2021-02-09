<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("paragraph");
            $table->string("iconeAddress");
            $table->string("titleAddress");
            $table->string("address");
            $table->string("iconeMail");
            $table->string("titleMail");
            $table->string("iconePhone");
            $table->string("titlePhone");
            $table->string("loading");
            $table->string("success");
            $table->string("btnContact");
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
        Schema::dropIfExists('contacts');
    }
}
