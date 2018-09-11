<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_features', function (Blueprint $table) {
            
            $table->unsignedInteger ('ticket_id');
            $table->unsignedInteger ('ticket_component_id');
            $table->enum('type', ['feature', 'exclusive_offer'])->default('feature');

            $table->foreign('ticket_id')
                  ->references ('id')->on('ticket')
                  ->onDelete('cascade');

            $table->foreign('ticket_component_id')
                  ->references ('id')->on('ticket_components')
                  ->onDelete('cascade');
            
            $table->primary(['ticket_id', 'ticket_component_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_features');
    }
}
