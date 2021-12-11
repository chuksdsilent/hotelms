<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservationBilling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_billing', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("class_of_room");
            $table->string("room_number");
            $table->string("phone");
            $table->string("customer_name");
            $table->string("occupation");
            $table->string("amount_paid");
            $table->string("check_in_time");
            $table->string("check_out_time");
            $table->string("check_in_date");
            $table->string("check_out_date");
            $table->longText("customer_address");
            $table->string("user_id")
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_billing');
    }
}
