<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTicketComponents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ticket_components', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 255);
            $table->string('description_vi', 255);
            $table->text('icon')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('ticket_components');
    }
}
