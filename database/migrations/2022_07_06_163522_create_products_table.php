<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('bodyHtml');
            $table->string('vendor');
            $table->string('product_type');
            $table->string('handle');
            $table->string('template_suffix');
            $table->string('status');
            $table->string('admin_graphql_api_id');
            $table->string('published_scope');
            $table->timestamp('published_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
