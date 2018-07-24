<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomerMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        //
    public function up()
    {
        Schema::create('customer_message', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('message')->nullable();
            $table->string('phone_number',15)->nullable();
            $table->string('email',255)->nullable();
            $table->enum('status', ['new', 'inprocess', 'done'])->default('new');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('customer_message');
    }
}
