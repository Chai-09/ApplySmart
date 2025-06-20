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
        Schema::table('payment', function (Blueprint $table) {
            $table->string('payment_status')->default('pending')->after('proof_of_payment');
        });
    }

    public function down(): void
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->dropColumn('payment_status');
        });
    }
};
