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
        Schema::create('user_orgs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->primary(['user_id', 'organization_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_orgs');
    }
};
