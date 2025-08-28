<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LanguageGroup;

class LanguageGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Kalenjin',
                'symbol_image' => 'symbols/kalenjin_cattle.png', // example path
                'description' => 'A group of Nilotic languages spoken primarily in the Rift Valley region of Kenya, known for their rich cultural traditions and athletics excellence.',
            ],
            [
                'name' => 'Mijikenda',
                'symbol_image' => 'symbols/mijikenda_shield.png', // example path
                'description' => 'A group of Bantu languages spoken along the coastal region of Kenya, united by common cultural practices and history.',
            ],
        ];

        foreach ($groups as $group) {
            LanguageGroup::updateOrCreate(['name' => $group['name']], $group);
        }
    }
}
