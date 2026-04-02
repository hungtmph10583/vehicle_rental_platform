<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            // Ma code (vd: HUNGTM)
            $table->string('code')->unique();
            // Loai giam gia (theo % or gia tien co dinh)
            $table->enum('discount_type',['percent','fixed'])->default('percent');
            // So tien giam toi da (dung cho percent)
            // vd: giam 10% nhung khong dc qua 200k
            $table->unsignedBigInteger('discount_value')->nullable();
            $table->unsignedBigInteger('max_discount')->nullable();
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            // Gioi han so lan su dung
            $table->integer('usage_limit')->nullable();
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
        Schema::dropIfExists('promotions');
    }
}
