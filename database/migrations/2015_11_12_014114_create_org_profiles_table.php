<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('org_id')->unsigned();
            $table->string('company_name');
            $table->string('detail');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
            $table->foreign('org_id')->references('id')->on('orgs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('org_profiles');
    }
}
