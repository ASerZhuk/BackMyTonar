<?php

namespace Database\Seeders;

use App\Models\BusNavigation;
use App\Models\Stops;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class BusNavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
   
    $routes = [
        [
            'title' => 'Маршрут 1',
            'nameStart' => 'Орехово-Зуево, ул. Парковская',
            'nameEnd' => 'Завод "Тонар"',
            'dotsStart' => json_encode(['dotX' => 55.820455, 'dotY' => 38.999532]),
            'dotsEnd' => json_encode(['dotX' => 55.707774397287785, 'dotY' => 39.10465398650744]),
            'stops' => [
                [
                    'coordinate' => json_encode(['dotX' => 55.738798022272356, 'dotY' => 38.9438779989094]),
                    'name' => 'Проходная завода',
                    'arrivalTime' => '07:30'
                ],
                [
                    'coordinate' => json_encode(['dotX' => 55.72777804150696, 'dotY' => 38.958179537217795]),
                    'name' => 'ул. Советская',
                    'arrivalTime' => '07:35'
                ],
                [
                    'coordinate' => json_encode(['dotX' => 55.72615883747758, 'dotY' => 38.97549587856899]),
                    'name' => 'Площадь Ленина',
                    'arrivalTime' => '07:40'
                ]
            ]
        ],
        [
            'title' => 'Маршрут 2',
            'nameStart' => 'Орехово-Зуево, Маяк',
            'nameEnd' => 'Завод "Тонар"',
            'dotsStart' => json_encode(['dotX' => 55.80653470110852, 'dotY' => 38.96175357194959]),
            'dotsEnd' => json_encode(['dotX' => 55.707774397287785, 'dotY' => 39.10465398650744]),
            'stops' => [
                [
                    'coordinate' => json_encode(['dotX' => 55.77705140453909, 'dotY' => 38.96278354226197]),
                    'name' => 'Проходная завода',
                    'arrivalTime' => '08:00'
                ],
                [
                    'coordinate' => json_encode(['dotX' => 55.75145861692373, 'dotY' => 38.933429447479284]),
                    'name' => 'Торговый центр',
                    'arrivalTime' => '08:10'
                ]
            ]
        ]
    ];

  
    foreach ($routes as $routeData) {
        $bus = BusNavigation::create([
            'title' => $routeData['title'],
            'nameStart' => $routeData['nameStart'],
            'nameEnd' => $routeData['nameEnd'],
            'dotsStart' => $routeData['dotsStart'],
            'dotsEnd' => $routeData['dotsEnd'],
        ]);

       
        $bus->stops()->createMany($routeData['stops']);
    }
}
}
