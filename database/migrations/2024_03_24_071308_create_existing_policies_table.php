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
        Schema::create('existing_policies', function (Blueprint $table) {
            $table->id();
            $table->string('policy_number');
            $table->string('company_name');
            $table->string('purchase_date', 25);
            $table->string('expiry_date', 25);
            $table->decimal('deductible_price',10,2);
            $table->tinyInteger('is_expired')->default(0);
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
        Schema::dropIfExists('existing_policies');
    }
};
