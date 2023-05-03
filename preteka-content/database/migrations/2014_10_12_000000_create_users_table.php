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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string("password", 255);
            $table->string("phone_number", 255)->nullable();
            $table->string("pf_bio", 255)->nullable();
            $table->string("work", 255)->nullable();
            $table->string("edu", 255)->nullable();
            $table->string("facebook", 255)->nullable();
            $table->string("instagram", 255)->nullable();
            $table->string("telegram", 255)->nullable();
            $table->string("linkedin", 255)->nullable();
            $table->string("pf-image", 255)->nullable();
            $table->string("cover-image", 255)->nullable();
            $table->biginteger('role');
            $table->date('dob')->date_format('d.m.Y')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
