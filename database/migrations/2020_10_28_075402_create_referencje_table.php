<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencjeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content_pl');
            $table->text('content_en');
            $table->text('content_uk');
            $table->string('scan');
            $table->string('thumbnail_scan');
            $table->string('from_whom');
            $table->string('position_pl');
            $table->string('position_en');
            $table->string('position_uk');
            $table->string('logo');
            $table->string('reference_date');
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
        Schema::dropIfExists('referencje');
    }
}
