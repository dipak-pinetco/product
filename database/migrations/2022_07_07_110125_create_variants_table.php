<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('title', 20);
            $table->float('price');
            $table->string('sku', 10);
            $table->integer('position');
            $table->string('inventory_policy', 30);
            $table->string('fulfillment_service', 20);
            $table->string('shopify', 20);
            $table->boolean('taxable');
            $table->string('barcode')->nullable();
            $table->integer('grams');
            $table->string('image_id')->nullable();
            $table->float('weight');
            $table->string('weight_unit', 10);
            $table->uuid('inventory_item_id');
            $table->integer('inventory_quantity');
            $table->integer('old_inventory_quantity');
            $table->boolean('requires_shipping');
            $table->uuid('admin_graphql_api_id');
            $table->string('compare_at_price')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('variants');
    }
};
