<?php

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
            $table->string('name')->unique();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['Не задано', 'Мужской', 'Женский'])->nullable()->default('Не задано');
            $table->string('city')->nullable();
            $table->json('address')->nullable();
            $table->string('phone')->nullable();
            $table->enum('status', ['Не задано', 'Женат/Замужем', 'Холост/Не замужем', 'Разведён(а)', 'Вдовец/Вдова',
                'Раздельное проживание', 'Гражданский брак'])->nullable()->default('Не задано');
            $table->enum('employment', ['Не задано', 'Работаю', 'Безработный/Безработная', 'Учусь', 'Пенсионер(ка)',
                'Домохозяин/Домохозяйка'])->nullable();
            $table->boolean('subscription')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
