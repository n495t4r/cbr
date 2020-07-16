<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->char('first_name',50);
            $table->char('middle_name',50)->nullable();
            $table->char('last_name',50);
            $table->string('gender');
            $table->char('phone',11)->unique();
            $table->string('email')->unique();
            $table->date('dob');
            $table->timestamp('registered_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('monitors');
    }
}
