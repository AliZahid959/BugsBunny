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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('about_our_agency_heading')->nullable();
            $table->longText('about_our_agency_description')->nullable();
            $table->string('about_our_agency_image')->nullable();
            $table->string('why_choose_us_heading')->nullable();
            $table->longText('why_choose_us_description')->nullable();
            $table->string('why_choose_us_image')->nullable();

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
        Schema::dropIfExists('about_pages');
    }
};
