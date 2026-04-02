<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_usages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('promotion_id')->contrained('promotions')->onDelete('cascade');
            $table->foreignId('user_id')->contrained('users')->onDelete('cascade');
            $table->foreignId('booking_id')->contrained('booking')->onDelete('cascade');
            $table->timestamp('used_at')->useCurrent();
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
        Schema::dropIfExists('promotion_usages');
    }
}
