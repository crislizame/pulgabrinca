<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200);
            $table->string('second_name',200);
            $table->unsignedBigInteger('type_identification_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('city_id');
            $table->bigInteger('identification_number');
            $table->string('company_name',200);
            $table->date('create_at');
            $table->date('bithday');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_type_id');
            $table->unsignedBigInteger('phone_country_code_id');
            $table->string('phone_number',20);
            $table->unsignedBigInteger('mobile_country_code_id');
            $table->string('mobile_number',20);
            $table->string('fax_country_code_id');
            $table->string('fax_number',20);
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
        Schema::dropIfExists('profiles');
    }
}
