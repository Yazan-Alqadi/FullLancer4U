<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('reciver_id')->unsigned();
            $table->foreign('reciver_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->string('type')->default('message');
            $table->bigInteger('re_id')->unsigned()->index()->nullable();
            $table->integer('status')->default(0);
            $table->time('read_at')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
