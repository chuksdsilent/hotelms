<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarKitchenDocket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bar_kitchen_docket', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("ref_no")->unique()->nullable();
            $table->string("room_no");
            $table->string("customer_name");
            $table->string("cashier_name");
            $table->longText("desc");
            $table->bigInteger("unit_price");
            $table->bigInteger("amount_paid");
            $table->bigInteger("bal");
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
        Schema::dropIfExists('bar_kitchen_docket');
    }
}
