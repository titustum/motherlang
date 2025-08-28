<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;
use App\Models\LanguageGroup;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch language groups by name
        $kalenjinGroup = LanguageGroup::where('name', 'Kalenjin')->first();
        $mijikendaGroup = LanguageGroup::where('name', 'Mijikenda')->first();

        $languages = [
            [
                'name' => 'Kikuyu',
                'code' => 'ki',
                'language_group_id' => null,
                'emoji' => '🌳', // example emoji
                'symbol_image' => 'symbols/kikuyu_tree.png',
                'people_image' => 'people/kikuyu.jpg',
                'counties' => json_encode(['Kiambu', 'Murang’a', 'Nyeri', 'Kirinyaga', 'Embu']),
                'description' => 'A Bantu language spoken by the Kikuyu people, the largest ethnic group in Kenya.',
            ],
            [
                'name' => 'Luo',
                'code' => 'luo',
                'language_group_id' => null,
                'emoji' => '🐟',
                'symbol_image' => 'symbols/luo_fish.png',
                'people_image' => 'people/luo.jpg',
                'counties' => json_encode(['Kisumu', 'Siaya', 'Homa Bay', 'Migori']),
                'description' => 'A Nilotic language spoken by the Luo people around Lake Victoria.',
            ],
            [
                'name' => 'Kamba',
                'code' => 'kam',
                'language_group_id' => null,
                'emoji' => '🌿',
                'symbol_image' => 'symbols/kamba_leaf.png',
                'people_image' => 'people/kamba.jpg',
                'counties' => json_encode(['Machakos', 'Makueni', 'Kitui']),
                'description' => 'A Bantu language spoken by the Kamba people in Eastern Kenya.',
            ],
            [
                'name' => 'Somali',
                'code' => 'so',
                'language_group_id' => null,
                'emoji' => '🐪',
                'symbol_image' => 'symbols/somali_camel.png',
                'people_image' => 'people/somali.jpg',
                'counties' => json_encode(['Wajir', 'Mandera', 'Garissa']),
                'description' => 'A Cushitic language spoken by the Somali community in northeastern Kenya.',
            ],
            // Kalenjin languages
            [
                'name' => 'Nandi',
                'code' => 'nandi',
                'language_group_id' => $kalenjinGroup ? $kalenjinGroup->id : null,
                'emoji' => '🐄',
                'symbol_image' => 'symbols/nandi_cattle.png',
                'people_image' => 'people/nandi.jpg',
                'counties' => json_encode(['Nandi', 'Uasin Gishu']),
                'description' => 'One of the Kalenjin languages spoken by the Nandi community.',
            ],
            [
                'name' => 'Kipsigis',
                'code' => 'kipsigis',
                'language_group_id' => $kalenjinGroup ? $kalenjinGroup->id : null,
                'emoji' => '🐂',
                'symbol_image' => 'symbols/kipsigis_cattle.png',
                'people_image' => 'people/kipsigis.jpg',
                'counties' => json_encode(['Kericho', 'Bomet']),
                'description' => 'Another Kalenjin language spoken by the Kipsigis community.',
            ],
            // Mijikenda languages
            [
                'name' => 'Digo',
                'code' => 'digo',
                'language_group_id' => $mijikendaGroup ? $mijikendaGroup->id : null,
                'emoji' => '🛡️',
                'symbol_image' => 'symbols/digo_shield.png',
                'people_image' => 'people/digo.jpg',
                'counties' => json_encode(['Kwale']),
                'description' => 'A Mijikenda language spoken by the Digo community.',
            ],
            [
                'name' => 'Duruma',
                'code' => 'duruma',
                'language_group_id' => $mijikendaGroup ? $mijikendaGroup->id : null,
                'emoji' => '🗡️',
                'symbol_image' => 'symbols/duruma_spear.png',
                'people_image' => 'people/duruma.jpg',
                'counties' => json_encode(['Kwale']),
                'description' => 'Another Mijikenda language spoken by the Duruma community.',
            ],
        ];

        foreach ($languages as $language) {
            Language::updateOrCreate(
                ['code' => $language['code']],
                $language
            );
        }
    }
}
