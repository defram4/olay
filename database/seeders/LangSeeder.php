<?php

namespace Database\Seeders;

use App\Models\Lang;
use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = [
            ['name' => 'Romanian', 'code' => 'ro'],
            ['name' => 'Russian', 'code' => 'ru'],
            ['name' => 'English', 'code' => 'en'],
        ];

        foreach ($langs as $lang) {
            Lang::create($lang);
        }
    }
}
