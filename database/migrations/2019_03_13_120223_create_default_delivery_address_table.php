<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultDeliveryAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_delivery_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_name');
            $table->string('country_flag');
            $table->string('address1');
            $table->string('code');
            $table->string('address2');
            $table->string('address3');
            $table->string('post_code');
            $table->string('phone');
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
        Schema::dropIfExists('default_delivery_address');
    }
}
