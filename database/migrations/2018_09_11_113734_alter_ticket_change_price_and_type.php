<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTicketChangePriceAndType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticket', function (Blueprint $table) {
            //remove future from enum
            DB::statement("ALTER TABLE ticket DROP COLUMN price");
            DB::statement("ALTER TABLE ticket ADD price TEXT");
            
            //migrate data
            DB::statement("UPDATE ticket set type = 'normal' where type = 'child'");

            DB::statement("ALTER TABLE ticket CHANGE COLUMN type type ENUM('normal', 'family')");
            
            
            DB::statement("ALTER TABLE ticket DROP COLUMN duration");
            DB::statement("ALTER TABLE ticket DROP COLUMN content");
            DB::statement("ALTER TABLE ticket DROP COLUMN config");
            DB::statement("ALTER TABLE ticket DROP COLUMN slug");
            DB::statement("ALTER TABLE ticket DROP COLUMN status");       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket', function (Blueprint $table) {
            //
        });
    }
}
