<?php

use App\Models\ProductType;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->longText('description');
            $table->integer('cost')->default(200);
            $table->timestamps();
        });
        
        ProductType::create(['name' => 'Termek1', 'description' => 'Leiras1', 'cost' => 6000]);

        ProductType::create(['name' => 'Termek2',  'description' => 'Leiras2', 'cost' => 1000]);

        ProductType::create(['name' => 'Termek3',  'description' => 'Leiras3', 'cost' => 60000]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
