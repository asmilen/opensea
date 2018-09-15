<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_order', function (Blueprint $table) {
            $table->string('id', 20);
            $table->text('user_gender');
            $table->text('user_first_name');
            $table->text('user_last_name');
            $table->text('user_email');
            $table->text('user_address_line_1');
            $table->text('user_address_line_2');
            $table->text('user_city');
            $table->text('user_postcode');
            $table->text('user_state');
            $table->text('user_country');
            $table->enum('payment_status', ['pending','paid'])->default('pending');
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_order');
    }
}
