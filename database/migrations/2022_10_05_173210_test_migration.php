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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('volunteer_full_name');
            $table->string('volunteer_email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('association_id');
            $table->Date('date_of_birth');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->string('association_name');
            $table->string('association_location');
            $table->string('association_status');
            $table->string('association_phone_number');
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
        //
        Schema::dropIfExists('volunteers');
        Schema::dropIfExists('associations');
    }
};
