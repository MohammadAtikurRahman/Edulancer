<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosttimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posttimelines', function (Blueprint $table) {
            $table->bigIncrements('r_id');
            $table->unsignedBiginteger('student_id')->nullable();
            $table->unsignedBiginteger('teacher_id')->nullable();
            
            $table->string('r_subject');
            $table->Integer('r_salary');
            $table->Integer('r_weekly');
            $table->Time('r_schedule');
            $table->string('r_location');
            



            $table->string('r_gender');
            $table->string('r_address');
            $table->string('r_city');
            $table->string('r_area');
            $table->string('r_medium');
            $table->string('r_details');




            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));

           


        });
        Schema::table('posttimelines', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('studentinformations');
            $table->foreign('teacher_id')->references('t_id')->on('teacherinformations');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posttimelines');
    }
}
