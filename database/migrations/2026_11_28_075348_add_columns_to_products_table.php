
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name_product');
            $table->integer('stock_product');
            $table->integer('price_product');
            $table->text('desc_product');
            $table->unsignedBigInteger('id_category');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'name_product',
                'stock_product',
                'price_product',
                'desc_product',
                'id_category'
            ]);
        });
    }
};
