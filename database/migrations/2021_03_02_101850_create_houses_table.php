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
            $table->unsignedBigInteger('idUser');
            $table->string('governorate');
            $table->string('nameHouse');
            $table->string('categoryHouse');//(sale or rent )
            $table->string('typeHouse');//(flat or land or Villa or palace or office.......)
            $table->string('site');
            $table->double('price');
            $table->string('typePrice')->nullable();//(private or public)
            $table->integer('phone');
            $table->text('description');
            $table->integer('bathroom')->default(1);
            $table->integer('roomNumber')->default(1);
            $table->mediumText('mainImage');
            $table->mediumText('apartmentImage');
            $table->mediumText('livingRoomImage');
            $table->mediumText('bedRoomImage');
            $table->mediumText('kitchenImage');
            $table->mediumText('garageImage');
            $table->integer('rate')->default(0);
            $table->string('showHouse')->default('show');// another default value (unshow)
            $table->string('reserve')->default('Not reverse Yet');// another default value (reverse now)
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
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
