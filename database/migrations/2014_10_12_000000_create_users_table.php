<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->unsignedBigInteger('media_id')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone')->unique();
            $table->string('job')->nullable();
            $table->string('national_number')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('status', User::$statuses)->default(User::ACTIVE_STATUS);
            $table->enum('two_factor_method', \App\Models\User::$two_factor_types);
            $table->boolean('two_factor')->default(0);
            $table->boolean('is_superuser')->default(0);
            $table->integer('point')->default(0);
            $table->string('ip')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
}
