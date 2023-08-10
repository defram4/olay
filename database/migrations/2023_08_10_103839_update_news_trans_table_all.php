<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNewsTransTableAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_trans', function (Blueprint $table) {
            $table->string('title')->nullable()->default(null)->change();
            $table->string('sub_title')->nullable()->default(null)->change();
            $table->text('excerpt')->nullable()->default(null)->change();
            $table->text('text')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_trans', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change();
            $table->string('sub_title')->nullable(false)->change();
            $table->text('excerpt')->nullable(false)->change();
            $table->text('text')->nullable(false)->change();
        });
    }
}
