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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('category', ['desktop', 'laptop', 'tablet']);
            $table->string("hardwareSpecs");
            $table->foreignId('manufacturer_id')->constrained("manufacturers")->onDelete('cascade');
            $table->string("saleInfo");
            $table->string("contactInfo");
            $table->string("userName");
            $table->string("price");
            $table->string("invoice");
            $table->string("purchaseDate");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
};
