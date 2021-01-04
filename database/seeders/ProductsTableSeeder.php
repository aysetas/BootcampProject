<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\ProductDetails;



class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('products')->truncate();
        DB::table('product_details')->truncate();
        $products=[
            ["product_name"=>"Domates Çorbası", "slug"=>'Domates Çorbası', 'content'=>"en iyi ürün","price"=>20 ],
            ["product_name"=>"Yayla Çorbası", "slug"=>"Yayla Çorbası", "content"=>"en iyi ürün","price"=>30],
            ["product_name"=>"Kelle Paça Çorbası", "slug"=>"Kelle Paça Çorbası", "content"=>"en iyi ürün","price"=>20],
            ["product_name"=>"Tarhana Çorbası","slug"=>"Tarhana Çorbası", "content"=>"en iyi ürün","price"=>40 ],
            ["product_name"=>"Tavuk Çorbası", "slug"=>"Tavuk Çorbası", "content"=>"en iyi ürün","price"=>10  ],
            ["product_name"=>"Mercimek Çorbası", "slug"=>"Mercimek Çorbası", "content"=>"en iyi ürün","price"=>15 ],
            ["product_name"=>"Kereviz Çorbası", "slug"=>"Kereviz Çorbası", "content"=>"en iyi ürün","price"=>25 ],
            ["product_name"=>"Şehriyeli Çorba", "slug"=>"Şehriyeli Çorba", "content"=>"en iyi ürün","price"=>22 ],
            ["product_name"=>"Havuçlu Kabak Çorbası", "slug"=>"Havuçlu Kabak Çorbası", "content"=>"en iyi ürün","price"=>14],
            ["product_name"=>"Ayran Çorbası", "slug"=>"Ayran Çorbası", "content"=>"en iyi ürün","price"=>20 ]
        ];


        foreach($products as $product){
        $product=Products::create($product);
        $detail=$product->detail()->create([
            'show_slider'=>rand(0,1),
            'show_opportunity_day'=>rand(0,1),
            'show_featured'=>rand(0,1),
            'show_bestseller'=>rand(0,1),
            'show_discounted'=>rand(0,1)
        ]);

          }

    }
}

