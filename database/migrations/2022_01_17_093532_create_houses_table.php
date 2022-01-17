<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('city',20);
            $table->char('post_code',6)->nullable();
            $table->tinyInteger('rooms')->nullable();
            $table->smallInteger('square_meters');
            $table->boolean('for_sale')->default(0);
            $table->boolean('to_late')->default(1);
            $table->boolean('is_available')->default(1);
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
        Schema::dropIfExists('houses');
    }
}

