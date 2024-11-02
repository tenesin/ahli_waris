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
        if (!Schema::hasTable('status_option')) {
            Schema::create('status_option', function (Blueprint $table) {
                $table->id('status_id'); // Use status_id as the primary key
                $table->string('status'); // Column to store the status name
                $table->timestamps();
            });
        }
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_option');
    }
};
