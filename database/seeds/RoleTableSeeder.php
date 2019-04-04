<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->truncate();
        Role::insert([[
            'user'     => '1115070027',
            'role'     => 'mahasiswa'
        ],
        [
            'user'     => '111222333',
            'role'     => 'kaprodi'
        ]]);
    }
}
