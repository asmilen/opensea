<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketInstanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_instance', function (Blueprint $table) {
            $table->string('id', 20);

            //ticket type : adult, child or family
            $table->text('type');

            //ticket is booked - issued - canceled - used
            
            $table->enum('status', ['booked', 'issued', 'canceled', 'used'])->default('booked');

            $table->string('order_id', 20);
            $table->unsignedInteger('ticket_id');

            $table->timestamps();

            $table->primary('id');

            $table->foreign('order_id')
                  ->references('id')->on('online_order')
                  ->onDelete('cascade');

            $table->foreign('ticket_id')
                  ->references('id')->on('ticket')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_instance');
    }
}
