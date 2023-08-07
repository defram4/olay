<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeywordsToProjectMetaTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_meta_trans', function (Blueprint $table) {
            $table->text('keywords')->nullable()->default(null)->after('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_meta_trans', function (Blueprint $table) {
            $table->dropColumn('keywords');
        });
    }
}
