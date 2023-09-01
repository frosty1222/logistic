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
        Schema::create('logistics', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->string('customer_name');
            $table->string('expected_delivery_date');
            $table->string('recipient_address');
            $table->string('shipping_address');
            $table->string('shipping_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logistics');
    }
};
