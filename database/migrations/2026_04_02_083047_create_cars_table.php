<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->foreignId('car_type_id')->constrained()->onDelete('cascade');
            $table->string('model');
            $table->year('year');
            $table->string('image_url');
            $table->string('color');
            $table->string('license_plate')->unique(); // Bien so xe
            $table->tinyInteger('seats')->default(4); 

            // $table->tinyInteger('transmission', 4)->default(1); // 1='auto', 2='manual'
            // $table->tinyInteger('fuel_type', 4)->default(1); // 1='gasoline',2='diesel',3='electric'
            // $table->tinyInteger('status', 4)->default(1); // 1='available',2='booked',3='maintenance'
            $table->enum('transmission', ['auto', 'manual'])->default('auto');
            $table->enum('fuel_type', ['gasoline', 'diesel', 'electric'])->default('gasoline');
            $table->decimal('fuel_consumption', 5, 2)->nullable();

            // Note: fuel_consumption_display (L/100km or kWh/100km)

            $table->unsignedInteger('mileage')->default(0);
            $table->enum('status', ['available', 'booked', 'maintenance'])->default('available')->index();

            $table->text('description')->nullable(); // Thêm mô tả chi tiết xe

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
        Schema::dropIfExists('cars');
    }
}
