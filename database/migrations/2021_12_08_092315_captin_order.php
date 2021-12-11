<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CaptinOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('captin_order', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("serial_no")->nullable();
            $table->string("order_from");
            $table->string("time");
            $table->string("desc");
            $table->string("qty");
            $table->string("room_no")->nullable();
            $table->string("table_no");
            $table->string("cover");
            $table->string("unit_price");
            $table->string("amount");
            $table->string("name_of_waitress");
            $table->string("user_id")
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('captin_order');
    }
}
