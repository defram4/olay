<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNewsTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

      public function up()
{
    Schema::table('news_trans', function (Blueprint $table) {
        // Modify the column definition
        $table->string('sub_title')->nullable()->default(null)->change();
    });
}

public function down()
{
    Schema::table('news_trans', function (Blueprint $table) {
        // Revert the column definition back to its original state
        $table->string('sub_title')->change();
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
}

