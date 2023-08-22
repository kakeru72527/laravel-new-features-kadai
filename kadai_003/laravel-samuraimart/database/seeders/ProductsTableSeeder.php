<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'PHPプロフェッショナル開発', 'Linux', 'Bootstrap', 'Laravel', 'CSS',
            'tennis', 'soccer', 'baseball', 'basketball', 'kendo',
            'us-broth', 'connan', 'naruto', 'one peace', 'gintama'
        ];

        $descriptions = [
            'PCスキルを身に着ける', 'PCスキルを身に着ける', 'PCスキルを身に着ける', 'PCスキルを身に着ける', 'PCスキルを身に着ける', 
            'スポーツ', 'スポーツ', 'スポーツ', 'スポーツ', 'スポーツ', 
            '漫画', '漫画', '漫画', '漫画', '漫画', 
        ];

        $prices = [
            2000, 2000, 2000, 2000, 2000, 
            1500, 1500, 1500, 1500, 1500, 
            800,  800,  800,  800,  800, 
        ];

        $category_ids = [
            5, 5, 5, 5, 5,
            4, 4, 4, 4, 4,
            2, 2, 2, 2, 2
        ];


        foreach(array_map(null, $names, $descriptions, $prices, $category_ids) as [$name, $description, $price, $category_id]){
            Product::create([
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'category_id' => $category_id
            ]);
        }


    }
}
