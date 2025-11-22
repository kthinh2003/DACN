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
        Schema::create('table_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_list')->constrained('table_product_list')->onDelete('cascade');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->longText('content')->nullable();
            $table->string('photo_name')->nullable();
            $table->string('photo_path')->nullable();
            $table->decimal('regular_price', 12, 2)->nullable();
            $table->decimal('sale_price', 12, 2)->nullable();
            $table->decimal('discount', 5, 2)->nullable();
            $table->foreignId('id_publisher')->nullable()->constrained('table_publishers')->onDelete('set null');
            $table->string('author')->nullable();
            $table->string('code')->unique()->nullable();
            $table->year('publishing_year')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('featured')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_product');
    }
};
