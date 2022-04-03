<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slider_title');
            $table->text('slogan');
            $table->text('title');
            $table->text('client');
            $table->text('project_name');
            $table->text('location');
            $table->text('surface_area');
            $table->text('year_completed');
            $table->text('value');
            $table->text('architect');
            $table->text('short_description');
            $table->text('detail_description');
            $table->string('banner_image');
            $table->string('picture_1');
            $table->string('picture_2');
            $table->string('picture_3');
            $table->string('picture_slider_1');
            $table->string('picture_slider_2');
            $table->string('picture_slider_3');
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
        Schema::dropIfExists('projects');
    }
};
