<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceBeforesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_befores', function (Blueprint $table) {
            $table->id();
            $table->string('preorder_manufacturer');
            $table->string('preorder_year');
            $table->string('preorder_color');
            $table->string('preorder_delivary_date');
            $table->string('preorder_model');
            $table->string('preorder_grade');
            $table->string('preorder_mileage');
            $table->string('your_car_manufacturer');
            $table->string('your_car_year');
            $table->string('your_car_preferred_color');
            $table->string('your_car_preferred_delivery_date');
            $table->string('your_car_model');
            $table->string('your_car_preferred_grade');
            $table->string('your_description');
            $table->string('preferred_manufacturer');
            $table->string('preferred_year');
            $table->string('preferred_color');
            $table->string('preferred_delivary_date');
            $table->string('preferred_model');
            $table->string('preferred_grade');
            $table->string('preferred_mileage');
            $table->string('preferred_description');
            $table->tinyInteger('position')->comment("1=> Preorder, 2=> Exchange");
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
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
        Schema::dropIfExists('service_befores');
    }
}
