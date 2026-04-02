<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('restrict');
            // so tien thanh toan
            $table->unsignedBigInteger('amount');
            // phuong thuc thanh toan
            $table->enum('method',['cash','vnpay','momo'])->default('cash');
            // trang thai giao dich
            $table->enum('status',['pending','success','failed'])->default('pending')->index();
            // Mã giao dịch từ cổng thanh toán (Ví dụ: Mã của Vnpay hoặc Momo trả về)
            $table->string('transaction_code')->nullable()->unique();
            // Thời điểm thanh toán thành công
            $table->timestamp('paid_at')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
