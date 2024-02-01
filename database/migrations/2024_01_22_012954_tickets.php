<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('concern');
            $table->string('message');
            $table->string('priority');
            $table->string('assignedto')->default('John');
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        
    }
};
