<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function(Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 40)->unique();
            $table->string('image');
            $table->integer('sort');
            $table->tinyInteger('status');
            $table->timestamps();
        });

        Schema::create('services_localizations', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('services_id')->unsigned()->index();
            $table->string('lang', 2);
            $table->string('title', 60);
            $table->string('short_content');
            $table->text('content');

            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('services_localizations');
    }
}
