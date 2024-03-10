<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    public function run()
    {
        $languages = [
            'PHP',
            'JavaScript',
            'Python',
            'Java',
            'C#',
            'Ruby',
            'Go',
            'Swift',
            'Kotlin',
            'Rust'
        ];

        foreach ($languages as $language) {
            DB::table('types')->insert([
                'name' => $language,
            ]);
        }
    }
}