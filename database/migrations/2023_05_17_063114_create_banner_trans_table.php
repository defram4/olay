<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_trans', function (Blueprint $table) {
            $table->id();

            $table->string('title_1')->nullable()->default(null);
            $table->string('title_2')->nullable()->default(null);
            $table->string('title_3')->nullable()->default(null);
            $table->string('title_4')->nullable()->default(null);
            $table->text('text')->nullable()->default(null);
            $table->string('btn_text')->nullable()->default(null);
            $table->text('btn_url')->nullable()->default(null);

            $table->string('lang');
            $table->string('slug')->index();

            $table->unsignedBigInteger('banner_id');

            $table->foreign('banner_id')
                ->references('id')->on('banners')
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
        Schema::dropIfExists('banner_trans');
    }
}
