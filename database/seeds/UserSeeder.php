<?php

use Illuminate\Support\Facades;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Merry Roger',
                'email' => 'roger@dammy.ru',
                //'passhash' => '',
                'checkhash' => 'f9a40cf512e97fabce9e6a265dd549f4',
                'roles' => 'master',
                'userdir' => 'users/f9a40cf512e97fabce9e6a265dd549f4',
                //'tries' => 3, //default value
                'valid_till' => '2999-12-31 23:59:59',
                'status' => 'verified',
                'off' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Техническая служба ДАММИ',
                'email' => 'tech@dammy.ru',
                //'passhash' => '',
                'checkhash' => '9ac81ca61535065f97940ac89f53f14b',
                'roles' => 'master',
                'userdir' => 'users/9ac81ca61535065f97940ac89f53f14b',
                //'tries' => 3, //default value
                'valid_till' => '2999-12-31 23:59:59',
                'status' => 'verified',
                'off' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($data as $portion) {
            Facades\DB::table('users')->insert($portion);
        }
    }
}
