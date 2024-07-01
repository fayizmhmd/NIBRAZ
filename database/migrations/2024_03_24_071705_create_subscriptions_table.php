<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('plan_id');
            $table->integer('duration');
            $table->decimal('price',10,2);
            $table->string('start_date', 20);
            $table->string('end_date', 20);
            $table->string('insurance_type', 20);
            $table->string('payment_mood');
            $table->string('payment_status');
            $table->string('payment_id');
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
        Schema::dropIfExists('subscriptions');
    }
};
