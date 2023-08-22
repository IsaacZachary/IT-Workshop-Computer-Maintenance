<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Uncategorized',
                'color' => '#43f219'
            ],
            [
                'name' => 'Power Issue',
                'color' => '#937d7e'
            ],
            [
                'name' => 'Technical question',
                'color' => '#7bec01'
            ],
            [
                'name' => 'Software Issue',
                'color' => '#000000'
            ],
            [
                'name' => 'Display Problem',
                'color' => '#937d7e'
            ],
            [
                'name' => 'Motherboard',
                'color' => '#ff0d0d'
            ],
            [
                'name' => 'Windows Activation',
                'color' => '#1f4ced'
            ],
            [
                'name' => 'Operating System Installation',
                'color' => '#e6ba1e'
            ],
            [
                'name' => 'Productive Software Installation',
                'color' => '#c90ca0'
            ],
            [
                'name' => 'Office 365 Installation',
                'color' => '#559e0d'
            ],
            [
                'name' => 'Drivers',
                'color' => '#e84141'
            ],
            [
                'name' => 'Unlocking',
                'color' => '#190404'
            ],
            [
                'name' => 'Faulty Fan',
                'color' => '#8466d9'
            ],
            [
                'name' => 'Ports',
                'color' => '#eba7d3'
            ],
            [
                'name' => 'Antivirus',
                'color' => '#dec95d'
            ],
            [
                'name' => 'Faulty Speakers',
                'color' => '#3913d1'
            ],
            [
                'name' => 'Internet Issue',
                'color' => '#ff0000'
            ],
            [
                'name' => 'Microsoft Outlook Mail',
                'color' => '#5ee6d5'
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::create([
                'name' => $categoryData['name'],
                'color' => $categoryData['color']
            ]);
        }
    }
}
