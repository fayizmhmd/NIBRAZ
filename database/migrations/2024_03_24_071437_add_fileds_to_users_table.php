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
        Schema::table('users', function (Blueprint $table) {
            $table->string('customer_id')->after('id');
            $table->string('phone', 12)->after('email');
            $table->string('gender', 10)->after('phone');
            $table->string('dob', 20)->after('gender');
            $table->string('insurance_type', 20)->after('image');
            $table->longText('family_detials')->after('image')->nullable();
            $table->tinyInteger('is_insured_other')->default(0)->after('insurance_type');
            $table->tinyInteger('is_healthy')->default(0)->after('is_insured_other');
            $table->tinyInteger('is_specific_illness')->default(0)->after('is_healthy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
