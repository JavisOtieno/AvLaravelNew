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
        Schema::table('productlinks', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('oldprice')->nullable()->after('price');
            $table->timestamp('updateddate')->nullable();
            $table->string('status')->nullable()->after('updateddate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productlinks', function (Blueprint $table) {
            //
            $table->dropColumn('oldprice','updateddate','status');
        });
    }
};
