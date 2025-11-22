<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_order', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique();
            $table->string('fullname');
            $table->string('phone');
            $table->text('address');
            $table->decimal('total_price', 12, 2)->default(0);
            $table->tinyInteger('status')->default(1); // 1: pending, 2: confirmed, 3: shipped, 4: delivered, 5: cancelled
            $table->foreignId('id_member')->nullable()->constrained('table_member', 'id')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('table_order_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order')->constrained('table_order', 'id')->cascadeOnDelete();
            $table->foreignId('id_product')->constrained('table_product', 'id')->cascadeOnDelete();
            $table->integer('quantity')->default(1);
            $table->decimal('regular_price', 12, 2)->default(0);
            $table->decimal('sale_price', 12, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_order_detail');
        Schema::dropIfExists('table_order');
    }
};
