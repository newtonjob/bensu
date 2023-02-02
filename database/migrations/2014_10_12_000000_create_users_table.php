<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone', 45)->nullable()->unique();
            $table->string('first_name', 45);
            $table->string('last_name', 45)->nullable();
            $table->enum('gender', ['M', 'F'])->default('M')->index();
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->enum('type', ['admin', 'customer'])->default('customer');
//            $table->foreignId('role_id')->nullable()->constrained();
            $table->boolean('notifiable')->default(false);
            $table->integer('login_count')->default(0);
            $table->timestamp('last_login')->nullable();
            $table->timestamp('banned_until')->nullable();
            $table->json('meta')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->authors();
            $table->softDeletes();

            $table->fullText(['last_name', 'first_name', 'phone', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
