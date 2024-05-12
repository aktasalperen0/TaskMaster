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
        Schema::create('to_do_tasks', function (Blueprint $table) {
            $table->id();
            $table->string("profileID");
            $table->string("name");
            $table->string("surname");
            $table->string("email");
            $table->string("password");
            $table->string("taskTitle");
            $table->text("taskContent");
            $table->string("taskStatus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_do_tasks');
    }
};
