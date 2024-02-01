<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('joborders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('deadline');
            $table->string('message');
            $table->string('assignedto')->default('John');
            $table->string('status')->default(1);
            $table->string('priority');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
