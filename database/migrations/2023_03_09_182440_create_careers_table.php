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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('slug')->nullable();
            $table->longText('ideal_candidate')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->text('required_skills')->nullable();
            $table->longText('other_requirments')->nullable();
            $table->string('experience')->nullable();
            $table->string('status')->default('Publish');
            $table->longText('what_are_we_offering')->nullable();
            $table->string('salary')->nullable();
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
        Schema::dropIfExists('careers');
    }
};
