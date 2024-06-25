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
        Schema::create('baseline_pulse_rates', function (Blueprint $table) {
            $table->id();
            $table->string('age_group');
            $table->string('weight_range');
            $table->integer('pulse_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baseline_pulse_rates');
    }
};
