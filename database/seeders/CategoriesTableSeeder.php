<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            ['title'=>'Телевизоры'],
            ['title'=>'Аксессуары для телевизоров'],
            ['title'=>'Проекторы'],
            ['title'=>'Умные часы и браслеты'],
            ['title'=>'Акустические системы'],
            ['title'=>'Наушники и гарнитуры'],
            ['title'=>'Комплектующие для ПК'],
            ['title'=>'Игровые приставки и аксессуары'],
            ['title'=>'Apple'],
            ['title'=>'Смартфоны и планшеты'],
            ['title'=>'Чехлы'],
            ['title'=>'Графические планшеты'],
            ['title'=>'Техника для кухни'],
            ['title'=>'Пылесосы'],
            ['title'=>'Климатическая техника'],
            ['title'=>'Аксессуары'],
            ['title'=>'Гаджеты'],
            ['title'=>'Музыкальные инструменты'],
            ['title'=>'Товары для детей'],
            ['title'=>'Товары для путешествий и отдыха'],
            ['title'=>'Уцененные товары']
        ];
        foreach($categories as $category)
            Category::create([
                'title'=>$category['title']
            ]);

    }
}
