<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyChooseTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_choose_trans', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('text');
            $table->string('lang');
            $table->string('slug')->index();

            $table->unsignedBigInteger('why_choose_id');

            $table->foreign('why_choose_id')
                ->references('id')->on('why_chooses')
                ->onDelete('cascade');

            $table->foreign('lang')
                ->references('code')->on('langs')
                ->onDelete('cascade');

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
        Schema::dropIfExists('why_choose_trans');
    }
}
