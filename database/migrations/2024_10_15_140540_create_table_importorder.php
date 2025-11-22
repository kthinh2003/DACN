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
        Schema::create('table_importorder', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique();
            $table->date('import_date');
            $table->decimal('total_price', 12, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('table_importorderdetail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_import_order')->constrained('table_importorder', 'id')->cascadeOnDelete();
            $table->foreignId('id_product')->constrained('table_product', 'id')->cascadeOnDelete();
            $table->decimal('import_price', 12, 2)->default(0);
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_importorderdetail');
        Schema::dropIfExists('table_importorder');
    }
};
