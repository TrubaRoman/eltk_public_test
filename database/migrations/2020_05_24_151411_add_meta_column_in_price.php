<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMetaColumnInPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('price', function (Blueprint $table) {
            $table->string('meta_title')->nullable();
            $table->string('meta_descriptions')->nullable();
            $table->string('robots')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('price', function (Blueprint $table) {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_descriptions');
            $table->dropColumn('robots');
        });
    }
}
