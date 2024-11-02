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
        Schema::create('assets', function (Blueprint $table) {
            $table->uuid('asset_id')->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('status_id'); // Add the status_id column as a foreign key
            $table->string('asset_name');
            $table->string('asset_description')->nullable();
            $table->unsignedInteger('asset_total');
            $table->string('asset_uom');
            $table->decimal('asset_estimated_value', 16, 2);
            $table->timestamps();

            // Foreign key constraints
            $table->string('asset_status')->default('Belum Dialokasikan');
            $table->foreign('category_id')->references('category_id')->on('asset_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_id')->references('status_id')->on('status_options')->onDelete('cascade'); // Status options foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
