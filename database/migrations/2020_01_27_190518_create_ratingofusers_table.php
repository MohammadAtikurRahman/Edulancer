<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingofusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratingofusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('rating_giver_id')->nullable();
            $table->unsignedBiginteger('rating_user_id')->nullable();
            $table->integer('rating');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
        Schema::table('ratingofusers', function (Blueprint $table) {
            $table->foreign('rating_giver_id')->references('id')->on('studentinformations');
            $table->foreign('rating_user_id')->references('t_id')->on('teacherinformations');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratingofusers');
    }
}
