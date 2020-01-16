<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementofthewebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisementofthewebs', function (Blueprint $table) {
           
           
            $table->bigIncrements('post_id');

            $table->integer('ad_salary');
            $table->string('ad_city');
            
            $table->string('ad_location');

            $table->string('ad_medium');
            
            $table->string('ad_gender');


           
            $table->string('ad_institue');
            
            $table->string('ad_post');

            


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
        Schema::dropIfExists('advertisementofthewebs');
    }
}
