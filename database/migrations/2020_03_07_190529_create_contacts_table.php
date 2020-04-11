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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('subject');
            $table->string('lang',2);
            $table->text('body');
            $table->ipAddress('ip');
            $table->tinyInteger('is_read')->default(0);
            $table->tinyInteger('is_answer')->default(0);
            $table->timestamps();
        });

        Schema::create('answers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('contacts_id')->unsigned()->index()->nullable();
            $table->string('email');
            $table->string('name');
            $table->string('subject');
            $table->text('body');
            $table->timestamps();
            $table->foreign('contacts_id')->references('id')->on('contacts')->onDelete('cascade');
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
        Schema::dropIfExists('answers');
    }
}
