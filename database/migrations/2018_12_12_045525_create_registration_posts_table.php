<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category');
            $table->string('name_en')->nullable();
            $table->string('name_vn');
            $table->longText('value_en')->nullable();
            $table->longText('value_vn');
            $table->string('document_path');
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
        Schema::dropIfExists('registration_posts');
    }
}
