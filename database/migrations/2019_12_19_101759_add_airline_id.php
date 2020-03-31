<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAirlineId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flights', function (Blueprint $table) {
            // $table->dropForeign('students_course_id_unique');
            $table->integer('airline_id')->nullable();
            $table->dropColumn('airline');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flights', function (Blueprint $table) {
            // $table->dropForeign('students_course_id_unique');
            $table->dropColumn('airline_id');
            $table->string('airline');

        });
    }
}