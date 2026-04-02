<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            // Số sao đánh giá (Dùng unsignedTinyInteger để tiết kiệm bộ nhớ vì chỉ từ 1-5)
            $table->unsignedTinyInteger('rating')->comment('Số sao từ 1 đến 5');
            $table->text('comment')->nullable();
            $table->enum('status', ['pending', 'approved', 'hidden', 'spam'])
                  ->default('pending')
                  ->index();
            $table->timestamps();
            $table->softDeletes();
            // Ràng buộc: Mỗi đơn hàng (booking) chỉ được phép có 1 review duy nhất
            $table->unique('booking_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
