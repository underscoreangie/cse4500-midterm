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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('hardwareSpecs');
            $table->integer('invoice');
            $table->double('price');
            $table->DateTime('purchaseDate');
            $table->string('userName');
            $table->string('userContact');
            $table->string('manuName');
            $table->string('saleContact');
            $table->string('techContact');
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
        Schema::dropIfExists('equipment');
    }
};
