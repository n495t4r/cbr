<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('phone')->unique();
            $table->string('gender', 10);
            $table->date('dob');
            $table->string('address', 100);
            $table->string('state',25);
            $table->string('lga',30);
            $table->string('marital_status',20);
            $table->string('progID');
            $table->string('alt_phone')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('occupation', 50)->nullable();
            $table->string('tpid', 20);
            $table->string('bank_name',50);
            $table->string('acct_number',10);
            $table->string('bvn',11);
            $table->string('id_type',20);
            $table->string('id_number', 20)->unique();
            $table->string('nok_fullname', 150);
            $table->string('nok_relationship',20);
            $table->string('nok_address', 100);
            $table->string('nok_phone');
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
        Schema::dropIfExists('beneficiaries');
    }
}
