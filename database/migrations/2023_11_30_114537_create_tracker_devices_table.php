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
        Schema::create('tracker_devices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size');
            $table->string('brand');
            $table->string('image');
            $table->string('brand_specific_id');
            $table->date('purchase_date');
            $table->boolean('renewable');
            $table->date('renewal_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracker_devices');
    }
};
