<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('price_per_hour');
            $table->unsignedBigInteger('price_per_day');
            $table->unsignedBigInteger('price_per_week');
            $table->unsignedBigInteger('price_per_month');
            $table->unsignedBigInteger('weekend_multiplier');
            $table->unsignedBigInteger('holiday_multiplier');
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
        Schema::dropIfExists('pricing_rules');
    }
}
