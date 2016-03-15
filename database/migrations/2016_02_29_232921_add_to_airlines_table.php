<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('airlines', function (Blueprint $table) {
            // added main columns for table
            $table->string('name');
            $table->string('code', 2);
            $table->string('slug')->unique;
            $table->string('logo_link');
            $table->string('photo_link');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('airlines', function (Blueprint $table) {
            //
            $table->dropColumn('name');
            $table->dropColumn('code');
            $table->dropColumn('slug');
            $table->dropColumn('logo_link');
            $table->dropColumn('photo_link');
            
        });
    }
}
