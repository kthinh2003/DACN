<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_order_status', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Tên trạng thái: pending, confirmed, shipped, delivered, cancelled
            $table->string('description')->nullable(); // Mô tả
            $table->string('color')->default('#6c757d'); // Màu hiển thị
            $table->timestamps();
        });

        // Thêm dữ liệu mặc định
        DB::table('table_order_status')->insert([
            ['name' => 'Pending', 'description' => 'Đang chờ xác nhận', 'color' => '#ffc107'],
            ['name' => 'Confirmed', 'description' => 'Đã xác nhận', 'color' => '#17a2b8'],
            ['name' => 'Shipped', 'description' => 'Đang vận chuyển', 'color' => '#007bff'],
            ['name' => 'Delivered', 'description' => 'Đã giao hàng', 'color' => '#28a745'],
            ['name' => 'Cancelled', 'description' => 'Đã hủy', 'color' => '#dc3545'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_order_status');
    }
};
