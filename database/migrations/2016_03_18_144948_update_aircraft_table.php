<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAircraftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aircraft', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('icao');
            $table->string('manufacturer');
            $table->string('slug')->unique;
            $table->string('speed');
            $table->string('ceiling');
            $table->string('range');
            $table->string('photolink');
            $table->string('created_by');
            $table->string('update_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aircraft', function (Blueprint $table) {
            //
             $table->dropColumn('name');
              $table->dropColumn('icao');
               $table->dropColumn('slug');
                $table->dropColumn('manufacturer');
                 $table->dropColumn('speed');
                  $table->dropColumn('ceiling');
                   $table->dropColumn('range');
                   $table->dropColumn('created_by');
            $table->dropColumn('update_by');
        });
    }
}
