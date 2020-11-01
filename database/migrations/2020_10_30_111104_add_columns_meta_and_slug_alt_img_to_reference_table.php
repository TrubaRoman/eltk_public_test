<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsMetaAndSlugAltImgToReferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('referencje', function (Blueprint $table) {
            $table->string('alt_image')->default('reference_scan');
            $table->string('slug');
            $table->string('meta_title_en')->default('Reference');
            $table->string('meta_title_pl')->default('Referencje');
            $table->string('meta_title_uk')->default('Рекомендація');
            $table->string('meta_description_pl')->default('Dzięki za podwykonawstwo');
            $table->string('meta_description_en')->default('Thanks for the subcontract');
            $table->string('meta_description_uk')->default('Подяка за субпідряд');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('referencje', function (Blueprint $table) {
            $table->dropColumn('alt_image');
            $table->dropColumn('slug');
            $table->dropColumn('meta_title_en');
            $table->dropColumn('meta_title_pl');
            $table->dropColumn('meta_title_uk');
            $table->dropColumn('meta_description_pl');
            $table->dropColumn('meta_description_en');
            $table->dropColumn('meta_description_uk');
        });
    }
}
