<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('category_id');
            $table->string('name')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        for($i=1; $i<30; $i++){
            DB::table('products')->insert([
                'user_id' => '2',
                'category_id' => rand(1, 15),
                'name' => 'product ' . $i,
                'photo' => 'default.jpg'
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
