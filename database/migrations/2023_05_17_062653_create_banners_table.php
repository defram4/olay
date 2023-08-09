<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();

            $table->string('big_img')->nullable()->default(null);
            $table->string('small_img')->nullable()->default(null);
            $table->string('mobile_img')->nullable()->default(null);
            $table->string('big_video')->nullable()->default(null);
            $table->string('mobile_video')->nullable()->default(null);
            $table->boolean('active')->default(1)->index();

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
        Schema::dropIfExists('banners');
    }
}
