<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(['title' => 'Телевизоры']);
        DB::table('category')->insert(['title' => 'Холодильники']);
        DB::table('category')->insert(['title' => 'Стиральные машины']);
        DB::table('category')->insert(['title' => 'Микроволновые печи']);
        DB::table('category')->insert(['title' => 'Газовые плиты']);
        DB::table('category')->insert(['title' => 'Варочные поверхности']);
        DB::table('category')->insert(['title' => 'Мобильные телефоны']);
    }
}
