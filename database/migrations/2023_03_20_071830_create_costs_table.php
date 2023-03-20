<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->enum('description',['penjualan', 'pembelian']);
            $table->date('date');
            $table->integer('qty');
            $table->float('price');
            // $table->float('cost');
            // $table->float('total_cost');
            // $table->bigInteger('qty_balance');
            // $table->integer('qty_balance')->virtualAs('(SELECT SUM(qty) OVER (ORDER BY id ROWS BETWEEN UNBOUNDED PRECEDING AND CURRENT ROW))');
            // $table->float('value_balance');
            // $table->float('hpp');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costs');
    }
};
