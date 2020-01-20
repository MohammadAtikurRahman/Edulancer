<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentinformations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_name');
            $table->string('s_email');
            $table->string('s_password');
            $table->string('s_school');
            $table->string('s_college');
            $table->string('s_university');



            $table->string('s_gender');
            $table->string('s_address');
            $table->string('s_city');
            $table->string('s_thana');
            $table->Integer('s_zip');






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
        Schema::dropIfExists('studentinformations');
    }
}
