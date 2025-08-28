<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'name' => 'Kikuyu',
                'slug' => 'kikuyu',
                'emoji' => '🌿',
                'symbol_image' => null,
                'people_image' => null,
                'counties' => ['Kiambu', 'Murang\'a', 'Nyeri', 'Kirinyaga', 'Nyandarua'],
                'description' => 'The Kikuyu are the largest ethnic group in Kenya, predominantly found in central Kenya.',
            ],
            [
                'name' => 'Luo',
                'slug' => 'luo',
                'emoji' => '🐟',
                'symbol_image' => null,
                'people_image' => null,
                'counties' => ['Kisumu', 'Siaya', 'Homa Bay', 'Migori'],
                'description' => 'The Luo community is primarily found around Lake Victoria in western Kenya.',
            ],
            [
                'name' => 'Kamba',
                'slug' => 'kamba',
                'emoji' => '🪓',
                'symbol_image' => null,
                'people_image' => null,
                'counties' => ['Machakos', 'Makueni', 'Kitui'],
                'description' => 'The Kamba people are mainly found in the semi-arid eastern region of Kenya.',
            ],
            [
                'name' => 'Somali',
                'slug' => 'somali',
                'emoji' => '🐪',
                'symbol_image' => null,
                'people_image' => null,
                'counties' => ['Wajir', 'Mandera', 'Garissa'],
                'description' => 'The Somali community inhabits the arid northeastern parts of Kenya.',
            ],
            [
                'name' => 'Maasai',
                'slug' => 'maasai',
                'emoji' => '🛡️',
                'symbol_image' => null,
                'people_image' => null,
                'counties' => ['Kajiado', 'Narok'],
                'description' => 'The Maasai are a semi-nomadic community found in southern Kenya and northern Tanzania.',
            ],
            [
                'name' => 'Kalenjin',
                'slug' => 'kalenjin',
                'emoji' => '🐄',
                'symbol_image' => null,
                'people_image' => null,
                'counties' => ['Uasin Gishu', 'Elgeyo Marakwet', 'Nandi', 'Bomet', 'Kericho'],
                'description' => 'The Kalenjin people are primarily found in the Rift Valley region of Kenya.',
            ],
        ];

        foreach ($languages as $language) {
            Language::updateOrCreate(
                ['slug' => $language['slug']],
                $language
            );
        }
    }
}
