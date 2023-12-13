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
            $table->string('name')->nullable();;
            $table->string('lastname')->nullable();;
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->unsignedBigInteger('chapter_id')->nullable();
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
            $table->unsignedBigInteger('profile_id')->nullable();
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->unsignedBigInteger('community_id')->nullable();
            $table->foreign('community_id')->references('id')->on('communities')->onDelete('cascade');
            $table->unsignedBigInteger('Address_id')->nullable();
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->string('photo')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->string('company')->nullable();
            $table->string('company_website')->nullable();
            $table->string('segment')->nullable();
            $table->integer('port')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
