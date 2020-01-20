<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacherinformations', function (Blueprint $table) {
        
            $table->bigIncrements('t_id');
            $table->string('t_name');
            $table->string('t_email');
            $table->string('t_password');
            $table->date('t_date');
            $table->Integer('t_phone');
            $table->string('t_gender');



            $table->string('t_school');
            $table->string('t_college');
            $table->string('t_university');
            $table->string('t_department');
            $table->string('t_area');

            $table->string('t_p_address');
            $table->string('t_pr_address');
            $table->Integer('t_nid');
            $table->Integer('t_passport');
            

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
        Schema::dropIfExists('teacherinformations');
    }
}
