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
        Schema::create('admintion_categories', function (Blueprint $table) {
            $table->id();
            $table->string('depertmant_id');
            $table->tinyInteger('status')->default(1)->comment('1=open, 0=close');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admintion_categories');
    }
};
