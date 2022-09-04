<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->double('price')->index();
            $table->text('description')->nullable();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('freelancer_id')->unsigned()->index();
            $table->foreign('freelancer_id')->references('id')->on('freelancers')->onDelete('cascade');
            $table->boolean('status')->default('0');

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
        // $table->dropForeign('lists_user_id_foreign');
        //$table->dropIndex('lists_user_id_index');
        Schema::dropIfExists('professions');
    }
}
