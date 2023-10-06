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
        Schema::create('blouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('name_product', 20);
            $table->string('description', 45);
            $table->string('color', 30);
            $table->string('size', 15);
            $table->integer('amount');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blouses');
    }
};
