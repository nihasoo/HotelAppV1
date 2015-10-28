<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('hotel_details', function($hoteltable){
         
            $hoteltable->increments('hotelid');
            $hoteltable->string('hotel_name');
            $hoteltable->integer('cityid');
            $hoteltable->string('address',100);
            $hoteltable->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('hotel_details');
	}

}
