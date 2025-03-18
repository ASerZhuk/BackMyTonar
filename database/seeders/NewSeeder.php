<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = ['/storage/images/newsBack.svg'];

        foreach ($images as $image) {
            $news = News::create([
                'title_one'=> 'Приложение «Мой Тонар 2.0» готово к работе',
                'description'=> 'Мы постоянно работаем над тем, чтобы сделать использование нашего приложения еще удобнее, быстрее и функциональнее. В этой версии вас ждут новые возможности, улучшенный интерфейс и множество приятных сюрпризов.',
                'title_two'=> 'Рады приветствовать вас в обновленной версии приложения!',
                'content'=> '<p><strong>Что нового?</strong></p> <p>Улучшенный интерфейс</p> <ul><li>Простой и интуитивно понятный дизайн.</li><li>Удобная навигация по разделам.</li><li>Поддержка темной и светлой темы.</li></ul> <p>Мы постоянно работаем над тем, чтобы сделать использование нашего приложения еще удобнее, быстрее и функциональнее. В этой версии вас ждут новые возможности, улучшенный интерфейс и множество приятных сюрпризов.</p>',
                'imageSrc'=> $image,
                'imageContent' => null
            ]);
        }
    }
}
