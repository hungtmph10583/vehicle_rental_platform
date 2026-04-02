<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', [
                'booking_status', // Thông báo về trạng thái đơn hàng (duyệt, hủy)
                'payment',        // Thông báo thanh toán thành công/thất bại
                'promotion',      // Thông báo có mã giảm giá mới
                'reminder',       // Nhắc nhở sắp đến giờ nhận/trả xe
                'system'          // Thông báo bảo trì hoặc cập nhật hệ thống
            ])->default('system')->index();
            $table->string('title');
            $table->text('content');
            $table->boolean('is_read')->default(false)->index();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
