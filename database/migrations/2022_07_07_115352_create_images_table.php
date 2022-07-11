<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('posittion');
            $table->string('alt');
            $table->bigInteger('width');
            $table->bigInteger('height');
            $table->string('src');
            $table->uuid('admin_graphql_api_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
};
