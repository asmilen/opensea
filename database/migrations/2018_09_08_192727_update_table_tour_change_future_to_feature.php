<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableTourChangeFutureToFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tour', function (Blueprint $table) {
            //change column enum from ("normal", "future") to ("normal", "feature") 
            
            DB::statement("ALTER TABLE tour CHANGE COLUMN type type ENUM('normal', 'future', 'feature')");
            //migrate data
            DB::statement("UPDATE tour set type = 'feature' where type = 'future'");
            //remove future from enum
            DB::statement("ALTER TABLE tour CHANGE COLUMN type type ENUM('normal', 'feature')");            
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour', function (Blueprint $table) {
            //
        });
    }
}
