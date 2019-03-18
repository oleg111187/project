<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnNameAuthorDescriptionContengtText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article', function ($table) {
//            $table->string('name',20);
//            $table->string('author',20);
//            $table->string('description',150);
//            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article', function ($table) {
//            $table->dropColumn('name');
//            $table->dropColumn('author');
//            $table->dropColumn('description');
//            $table->dropColumn('content');
        });
    }
}
