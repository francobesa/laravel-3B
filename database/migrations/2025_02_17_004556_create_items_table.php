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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger(column: 'category_id')->index();
            $table->string(column: 'item_name');
            $table->decimal(column: 'price',total: 10, places: 2);
            $table->integer(column: 'qty');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('items')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
