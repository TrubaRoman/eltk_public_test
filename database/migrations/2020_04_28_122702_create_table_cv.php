<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('offer');
            $table->tinyInteger('driving_license')->default(0);
            $table->tinyInteger('sep')->default(0);
            $table->tinyInteger('udt')->default(0);
            $table->integer('experience')->default(0);
            $table->text('message')->nullable();
            $table->string('cv')->nullable();
            $table->tinyInteger('is_read')->default(0);
            $table->ipAddress('ip');
            $table->string('lang',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
