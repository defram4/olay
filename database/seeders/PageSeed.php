<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            ['label' => 'Home'],
            ['label' => 'About'],
            ['label' => 'Services'],
            ['label' => 'Projects'],
            ['label' => 'Blog'],
            ['label' => 'Contact'],
            ['label' => 'Privacy'],
            ['label' => 'FAQ'],
            ['label' => 'Terms'],
        ];

        foreach ($pages as $page){
            Page::create($page);
        }
    }
}
