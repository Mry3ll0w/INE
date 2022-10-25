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
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->string('name',256)->nullable(false)->unique;
            $table->string('description',512);
            $table->string('imgUrl',256);
            $table->float('pricePerCredit',8,3);
            $table->float('discountPercent',8,2);
            $table->dateTime('discountStart_at');
            $table->dateTime('discountEnd_at');
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
        Schema::dropIfExists('Products');
    }
};
