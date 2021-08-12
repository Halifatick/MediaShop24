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
            ['title'=>'Все телевизоры', 'category_id'=>1],
            ['title'=>'По бренду', 'category_id'=>1],
            ['title'=>'По диагонали', 'category_id'=>1],
            ['title'=>'По типу экрана', 'category_id'=>1],
            ['title'=>'По назначению', 'category_id'=>1],
            //Аксессуары для телевизоров
            ['title'=>'Все аксессуары для телевизоров', 'category_id'=>2],
            ['title'=>'Кронштейны', 'category_id'=>2],
            ['title'=>'Саундбары', 'category_id'=>2],
            ['title'=>'Прочее', 'category_id'=>2],
            //Проекторы
            ['title'=>'Все проекторы', 'category_id'=>3],
            //Умные часы и браслеты
            ['title'=>'Все умные часы и браслеты', 'category_id'=>4],
            //Акустические системы
            ['title'=>'Все акустические системы', 'category_id'=>5],
            ['title'=>'Акустика', 'category_id'=>5],
            ['title'=>'Портативная акустика', 'category_id'=>5],
            ['title'=>'Сабвуферы', 'category_id'=>5],
            //Наушники и гарнитуры
            ['title'=>'Все наушники и гарнитуры', 'category_id'=>6],
            //Комплектующие для ПК
            ['title'=>'Все комплектующие для ПК', 'category_id'=>7],
            ['title'=>'Блоки питания', 'category_id'=>7],
            ['title'=>'Звуковые карты', 'category_id'=>7],
            ['title'=>'Видеокарты Nvidia', 'category_id'=>7],
            ['title'=>'Материнские платы', 'category_id'=>7],
            ['title'=>'Мониторы', 'category_id'=>7],
            ['title'=>'Прочее', 'category_id'=>7],
            //Игровые приставки и аксессуары
            ['title'=>'Все игровые приставки и аксессуары', 'category_id'=>8],
            ['title'=>'Игровые приставки', 'category_id'=>8],
            ['title'=>'Очки виртуальной реальности', 'category_id'=>8],
            ['title'=>'Игры и аксессуары', 'category_id'=>8],
            //Apple
            ['title'=>'Все Apple', 'category_id'=>9],
            ['title'=>'iPad', 'category_id'=>9],
            ['title'=>'iPhone', 'category_id'=>9],
            ['title'=>'iPod', 'category_id'=>9],
            ['title'=>'MacBook', 'category_id'=>9],
            ['title'=>'Watch', 'category_id'=>9],
            //Смартфоны и планшеты
            ['title'=>'Все смартфоны и планшеты', 'category_id'=>10],
            //Чехлы
            ['title'=>'Все чехлы', 'category_id'=>11],
            //Графические планшеты
            ['title'=>'Все графические планшеты', 'category_id'=>12],
            //Техника для кухни
            ['title'=>'Вся техника для кухни', 'category_id'=>13],
            ['title'=>'Миксеры и кухонные комбайны', 'category_id'=>13],
            ['title'=>'Кофеварки и кофемашины', 'category_id'=>13],
            ['title'=>'Блендеры', 'category_id'=>13],
            ['title'=>'Чайники и тостеры', 'category_id'=>13],
            ['title'=>'Прочее', 'category_id'=>13],
            //Пылесосы
            ['title'=>'Все пылесосы', 'category_id'=>14],
            ['title'=>'Беспроводные пылесосы', 'category_id'=>14],
            ['title'=>'Проводные пылесосы', 'category_id'=>14],
            ['title'=>'Роботы-пылесосы', 'category_id'=>14],
            //Климатическая техника
            ['title'=>'Вся климатическая техника', 'category_id'=>15],
            ['title'=>'Вентиляторы', 'category_id'=>15],
            ['title'=>'Прочее', 'category_id'=>15],
            //Аксессуары
            ['title'=>'Все аксессуары', 'category_id'=>16],
            ['title'=>'Док-станции', 'category_id'=>16],
            ['title'=>'Беспроводные ЗУ', 'category_id'=>16],
            ['title'=>'Переходники, кабели', 'category_id'=>16],
            ['title'=>'Стационарные медиаплееры', 'category_id'=>16],
            //Гаджеты
            ['title'=>'Все гаджеты', 'category_id'=>17],
            //Музыкальные инструменты
            ['title'=>'Все музыкальные инструменты', 'category_id'=>18],
            ['title'=>'Гитары', 'category_id'=>18],
            ['title'=>'Синтезаторы', 'category_id'=>18],
            ['title'=>'DJ-оборудование', 'category_id'=>18],
            ['title'=>'Микрофоны и радиосистемы', 'category_id'=>18],
            ['title'=>'Прочее', 'category_id'=>18],
            //Товары для детей
            ['title'=>'Все товары для детей', 'category_id'=>19],
            ['title'=>'Детские коляски и автокресла', 'category_id'=>19],
            ['title'=>'LEGO', 'category_id'=>19],
            ['title'=>'Прочее', 'category_id'=>19],
            //Товары для путешествий и отдыха
            ['title'=>'Все товары для путешествий и отдыха', 'category_id'=>20],
            ['title'=>'Грили, коптильни', 'category_id'=>20],
            ['title'=>'Товары для путешествий', 'category_id'=>20],
            //Уцененные товары
            ['title'=>'Все уцененные товары', 'category_id'=>21],
        ];
        foreach($subcategories as $subcategory)
            Subcategory::create([
                'title'=>$subcategory['title'],
                'category_id'=>$subcategory['category_id']
            ]);
    }
}
