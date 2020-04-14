<?php

use Illuminate\Database\Seeder;

class NewsandeventSeeder extends Seeder
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
                'destination' => '201911/event_20191112_12-00-00.xml',
                'created_at' => '2019-11-12 12:00:00',
                'updated_at' => '2019-11-12 12:00:00'
            ]
        ];

        foreach ($data as $portion) {
            DB::table('newsandevents')->insert($portion);
        }
    }
}
