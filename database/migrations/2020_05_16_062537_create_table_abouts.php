<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAbouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
            $table->integer('sort')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->string('icons')->nullable();
            $table->string('type_content')->default('main');
            $table->timestamps();
        });

        Schema::create('abouts_localization', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('abouts_id')->unsigned()->index();
            $table->string('lang', 2);

            $table->string('title', 60)->nullable();
            $table->string('short_content')->nullable();
            $table->text('content');

            $table->foreign('abouts_id')->references('id')->on('abouts')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
        Schema::dropIfExists('abouts_localization');
    }
}
