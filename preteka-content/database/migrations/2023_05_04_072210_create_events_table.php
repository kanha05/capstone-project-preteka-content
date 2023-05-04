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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            
            $table->string("event-poster", 255);
            $table->string("title", 255);
            $table->string("description", 255);
            $table->date('date_event')->date_format('d.m.Y');
            $table->time("time_start")->format('H:i');
            $table->time("time_end")->format('H:i');
            $table->string("location", 255);
            $table->string("agenda", 255)->nullable();
            $table->decimal("price",6,2);
            $table->timestamps();

            $table->bigInteger("user_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger("comment_id")->unsigned();
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');

            $table->bigInteger("feedback_id")->unsigned();
            $table->foreign('feedback_id')->references('id')->on('feedbacks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

