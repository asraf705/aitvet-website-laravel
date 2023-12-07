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
        Schema::create('paymentstatuses', function (Blueprint $table) {
            $table->id();
            $table->string('depertment');
            $table->string('semester');
            $table->string('roll');
            $table->string('paytype');
            $table->string('amount');
            $table->string('bkashnum');
            $table->string('txnid');
            $table->tinyInteger('status')->default(0)->comment('0= Hold, 1= Completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paymentstatuses');
    }
};
