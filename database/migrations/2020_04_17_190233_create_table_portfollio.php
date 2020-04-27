<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePortfollio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('portfolios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 40)->unique();
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
            $table->string('project_name')->nullable();
            $table->string('client')->nullable();
            $table->string('duration')->nullable();
            $table->string('address')->nullable();
            $table->integer('sort')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });

        Schema::create('portfolios_localization', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('portfolio_id')->unsigned()->index();
            $table->string('lang', 2);

            $table->string('title', 60)->nullable();
            $table->string('short_content')->nullable();
            $table->text('content');

            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('portfolios');
        Schema::dropIfExists('portfolios_localizations');
    }
}
