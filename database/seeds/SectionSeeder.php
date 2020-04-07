<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class SectionSeeder extends Seeder
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
                'name' => '__root__',
                'role' => 'guest',
                'entry_point' => 'templates.guest.default',
                'gen_view' => 'default',
                'template' => 'templates.guest.homepage',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'offices',
                'role' => 'guest',
                'entry_point' => 'templates.guest.default',
                'gen_view' => 'subpage',
                'template' => 'templates.guest.offices',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'contacts',
                'role' => 'guest',
                'entry_point' => 'templates.guest.default',
                'gen_view' => 'contacts',
                'template' => 'templates.guest.contacts',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $portion) {
            Facades\DB::table('sections')->insert($portion);
        }
    }
}
