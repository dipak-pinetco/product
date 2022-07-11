<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body_html');
            $table->string('vendor');
            $table->string('product_type');
            $table->string('handle');
            $table->string('template_suffix')->nullable();
            $table->string('status');
            $table->mediumText('tags');
            $table->string('admin_graphql_api_id');
            $table->json('variants');
            $table->json('options');
            $table->json('images');
            $table->json('image');
            $table->string('published_scope');
            $table->timestamp('published_at')->default(now());
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
};
