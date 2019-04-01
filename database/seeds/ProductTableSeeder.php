<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #1', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #2', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #3', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #4', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #5', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #6', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #7', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #8', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #9', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '1','title' => 'Телевизор #10', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #1', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #2', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #3', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #4', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #5', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #6', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #7', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #8', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #9', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '2','title' => 'Холодильник #10', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #1', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #2', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #3', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #4', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #5', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #6', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #7', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #8', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #9', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '3','title' => 'Стиральная машина #10', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #1', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #2', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #3', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #4', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #5', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #6', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #7', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #8', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #9', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '4','title' => 'Микроволновая печь #10', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #1', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #2', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #3', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #4', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #5', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #6', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #7', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #8', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #9', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '5','title' => 'Газовая плита #10', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #1', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #2', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #3', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #4', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #5', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #6', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #7', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #8', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #9', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '6','title' => 'Варочная панель #10', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #1', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #2', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #3', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #4', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #5', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #6', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #7', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #8', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #9', 'price' => ROUND(RAND(10000, 50000), 2)]);
        DB::table('product')->insert(['category_id' => '7','title' => 'Мобильный телефон #10', 'price' => ROUND(RAND(10000, 50000), 2)]);
    }
}
