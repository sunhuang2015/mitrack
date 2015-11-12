<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',100)->unique()->comment('组织代码');
            $table->string('name')->comment('名称');
            $table->string('token')->comment('联系主服务器');
            $table->boolean('actived')->default(false);
            $table->date('expired_date');
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
        Schema::drop('orgs');
    }
}
