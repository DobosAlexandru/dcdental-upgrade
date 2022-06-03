<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicii', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('nav_title')->unique();
            $table->string('slug');
            $table->text('meta_description');
            $table->text('tagline');
            $table->string('cover_image');
            $table->string('video_id');
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
        Schema::dropIfExists('servicius');
    }
}
