<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecherrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techerrequests', function (Blueprint $table) {
            $table->bigIncrements('request_id');
            $table->unsignedBiginteger('request_post_id')->nullable();
            $table->unsignedBiginteger('request_teacher_id')->nullable();
            $table->string('request_status');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
        Schema::table('techerrequests', function (Blueprint $table) {
            $table->foreign('request_post_id')->references('r_id')->on('posttimelines');
            $table->foreign('request_teacher_id')->references('t_id')->on('teacherinformations');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('techerrequests');
    }
}
