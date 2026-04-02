<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_code')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->foreignId('promotion_id')->nullable()->constrained('promotions')->onDelete('set null');

            // Thời gian thuê
            $table->dateTime('start_time');
            $table->dateTime('end_time');

            // --- PHẦN TÀI CHÍNH ---
            $table->unsignedBigInteger('subtotal')->comment('Giá gốc chưa giảm');
            $table->unsignedBigInteger('discount_amount')->default(0)->comment('Số tiền được giảm');
            $table->unsignedBigInteger('total_price')->comment('Giá cuối cùng khách phải trả');
            // ----------------------

            // Trạng thái đơn hàng
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed'])
                  ->default('pending')->index();

            // Trạng thái thanh toán
            $table->enum('payment_status', ['unpaid', 'paid', 'refunded'])
                  ->default('unpaid')->index();

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
        Schema::dropIfExists('bookings');
    }
}
