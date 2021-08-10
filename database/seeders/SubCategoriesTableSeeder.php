<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $subcategories = [
            //Телевизоры
            ['title'=>'Sony', 'category_id'=>1],
            ['title'=>'Samsung', 'category_id'=>1],
            ['title'=>'LG', 'category_id'=>1],
            ['title'=>'Philips', 'category_id'=>1],
            ['title'=>'ProCaster', 'category_id'=>1],
            ['title'=>'Panasonic', 'category_id'=>1],
            //Аксессуары для телевизоров
            ['title'=>'Кронштейны', 'category_id'=>2],
            ['title'=>'Саундбары', 'category_id'=>2],
            ['title'=>'Прочее', 'category_id'=>2],
            //Проекторы
            ['title'=>'Asus', 'category_id'=>3],
            ['title'=>'Benq', 'category_id'=>3],
            ['title'=>'Epson', 'category_id'=>3],
            ['title'=>'Optoma', 'category_id'=>3],
            ['title'=>'Прочее', 'category_id'=>3],
            //Акустические системы
            ['title'=>'Акустика', 'category_id'=>5],
            ['title'=>'Портативная акустика', 'category_id'=>5],
            ['title'=>'Сабвуферы', 'category_id'=>5],
            //Комплектующие для ПК
            ['title'=>'Блоки питания', 'category_id'=>7],
            ['title'=>'Звуковые карты', 'category_id'=>7],
            ['title'=>'Видеокарты Nvidia', 'category_id'=>7],
            ['title'=>'Материнские платы', 'category_id'=>7],
            ['title'=>'Мониторы', 'category_id'=>7],
            ['title'=>'Прочее', 'category_id'=>7],
            //Игровые приставки и аксессуары
            ['title'=>'Игровые приставки', 'category_id'=>8],
            ['title'=>'Очки виртуальной реальности', 'category_id'=>8],
            ['title'=>'Игры и аксессуары', 'category_id'=>8],
            //Apple
            ['title'=>'iPad', 'category_id'=>9],
            ['title'=>'iPhone', 'category_id'=>9],
            ['title'=>'iPod', 'category_id'=>9],
            ['title'=>'MacBook', 'category_id'=>9],
            ['title'=>'Watch', 'category_id'=>9],
            //Техника для кухни
            ['title'=>'Миксеры и кухонные комбайны', 'category_id'=>13],
            ['title'=>'Кофеварки и кофемашины', 'category_id'=>13],
            ['title'=>'Блендеры', 'category_id'=>13],
            ['title'=>'Чайники и тостеры', 'category_id'=>13],
            ['title'=>'Прочее', 'category_id'=>13],
            //Пылесосы
            ['title'=>'Беспроводные пылесосы', 'category_id'=>14],
            ['title'=>'Проводные пылесосы', 'category_id'=>14],
            ['title'=>'Роботы-пылесосы', 'category_id'=>14],
            //Климатическая техника
            ['title'=>'Вентиляторы', 'category_id'=>15],
            ['title'=>'Прочее', 'category_id'=>15],
            //Аксессуары
            ['title'=>'Док-станции', 'category_id'=>16],
            ['title'=>'Беспроводные ЗУ', 'category_id'=>16],
            ['title'=>'Переходники, кабели', 'category_id'=>16],
            ['title'=>'Стационарные медиаплееры', 'category_id'=>16],
            //Музыкальные инструменты
            ['title'=>'Гитары', 'category_id'=>18],
            ['title'=>'Синтезаторы', 'category_id'=>18],
            ['title'=>'DJ-оборудование', 'category_id'=>18],
            ['title'=>'Микрофоны и радиосистемы', 'category_id'=>18],
            ['title'=>'Прочее', 'category_id'=>18],
            //Товары для детей
            ['title'=>'Детские коляски и автокресла', 'category_id'=>19],
            ['title'=>'LEGO', 'category_id'=>19],
            ['title'=>'Прочее', 'category_id'=>19],
            //Товары для путешествий и отдыха
            ['title'=>'Грили, коптильни', 'category_id'=>20],
            ['title'=>'Товары для путешествий', 'category_id'=>20],

        ];
        foreach($subcategories as $subcategory)
            Subcategory::create([
                'title'=>$subcategory['title'],
                'category_id'=>$subcategory['category_id']
            ]);

    }
}
