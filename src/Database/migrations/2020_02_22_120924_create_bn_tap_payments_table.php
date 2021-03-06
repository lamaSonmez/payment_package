<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBnTapPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bn_tap_payments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('charge_id');
                $table->string('source_id');
                $table->float('amount');
                $table->string('currency');
                $table->string('status');
                $table->string('payment_method')->nullable(true);
                $table->string('description')->nullable(true);
                $table->string('order_reference')->nullable(true);
                $table->string('transaction_created');
                $table->string('transaction_url');
                $table->string('post_url')->nullable(true);
                $table->string('track_id')->nullable(true);
                $table->json('json')->nullable(true);
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
        Schema::dropIfExists('bn_tap_payments');
    }
}
