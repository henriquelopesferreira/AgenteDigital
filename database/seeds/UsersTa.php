<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'      => 'Henrique Lopes',
            'email'     => 'henriquelopes.uni@hotmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
