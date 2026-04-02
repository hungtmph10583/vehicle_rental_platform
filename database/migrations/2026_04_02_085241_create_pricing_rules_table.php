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
            $table->foreignId('car_id')->constrained()->onDelete('cascade')->index();
            $table->unsignedBigInteger('price_per_hour');
            $table->unsignedBigInteger('price_per_day');
            $table->unsignedBigInteger('price_per_week');
            $table->unsignedBigInteger('price_per_month');
            $table->decimal('weekend_multiplier', 5, 2)->default(1.00);
            $table->decimal('holiday_multiplier', 5, 2)->default(1.00);
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
