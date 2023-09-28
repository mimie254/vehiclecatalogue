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
        Schema::create('vehicle_agent', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id')
            ->references('id')
                ->on('agents')
                ->cascade('delete');

            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('vehicle_id')
                ->references('id')
                ->on('vehicles')
                ->cascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_agent');
    }
};
