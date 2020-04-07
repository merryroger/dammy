<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class MenuitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'access_group_id' => 0,
                'node' => 1,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 1,
                'purpose' => 'main',
                'mnemo' => 'about',
                'url' => '/#about',
                'section_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 2,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 2,
                'purpose' => 'main',
                'mnemo' => 'offices',
                'url' => '/offices',
                'section_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 3,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 3,
                'purpose' => 'main',
                'mnemo' => 'contacts',
                'url' => '/contacts',
                'section_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 4,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 4,
                'purpose' => 'main',
                'mnemo' => 'make_order',
                'url' => '/make_order',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 5,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 5,
                'purpose' => 'catalog',
                'mnemo' => 'printing',
                'url' => '/printing',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 6,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 6,
                'purpose' => 'catalog',
                'mnemo' => 'advert_making',
                'url' => '/advert_making',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 7,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 7,
                'purpose' => 'catalog',
                'mnemo' => 'book_printing',
                'url' => '/book_printing',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 8,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 8,
                'purpose' => 'catalog',
                'mnemo' => 'souvenir_production',
                'url' => '/souvenirs',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 9,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 9,
                'purpose' => 'layout_requirements',
                'mnemo' => 'for_images_and_large_format',
                'url' => '/requirements#uv',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 10,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 10,
                'purpose' => 'layout_requirements',
                'mnemo' => 'for_ofset',
                'url' => '/requirements#ofset',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 11,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 11,
                'purpose' => 'other',
                'mnemo' => 'news',
                'url' => '/news',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 12,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 12,
                'purpose' => 'other',
                'mnemo' => 'equipment',
                'url' => '/equipment',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'access_group_id' => 0,
                'node' => 13,
                'mode' => 1,
                'level' => 0,
                'parent' => 0,
                'order' => 13,
                'purpose' => 'other',
                'mnemo' => 'regime',
                'url' => '#regime',
                'section_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $portion) {
            Facades\DB::table('menuitems')->insert($portion);
        }
    }
}
