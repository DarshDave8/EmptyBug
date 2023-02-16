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
        Schema::create('my_services', function (Blueprint $table) {
            $table->id();
            $table->string('main_image')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('points')->nullable();
            $table->string('other_info')->nullable();
            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('my_services');
    }
};
