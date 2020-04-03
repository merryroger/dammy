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
        Facades\DB::table('sections')->insert([
            'name' => '__root__',
            'role' => 'guest',
            'gen_view' => 'default',
            'template' => 'templates.guest.homepage',
            'created_at' => now(),
            'updated_at' => now()
        ], [

        ]);
    }
}
