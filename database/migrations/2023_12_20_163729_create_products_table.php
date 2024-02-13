<?php

use App\Models\Product;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id('item_id');
            $table->foreignId('type_id')->references('type_id')->on('product_types');
            $table->date('date');
            $table->integer('quantity');
            $table->timestamps();
        });

        Product::create(['type_id' => 1, 'date' => '2024-01-12', 'quantity' => 1]);

        Product::create(['type_id' => 2, 'date' => '2023-02-10', 'quantity' => 2]);

        Product::create(['type_id' => 2, 'date' => '2024-02-01', 'quantity' => 10]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
