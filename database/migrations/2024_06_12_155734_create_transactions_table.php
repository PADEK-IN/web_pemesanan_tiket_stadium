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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained(table:'users',indexName:'transaction_id_user');
            $table->foreignId('id_ticket')->constrained(table:'tickets',indexName:'transaction_id_ticket');
            $table->integer('quantity');
            $table->date('date');
            $table->string('proof', 150)->nullable();
            $table->string('status')->default("Sedang diproses");
            $table->boolean('isValid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
