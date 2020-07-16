<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $users = factory(App\User::class, 1)->create();

        DB::table('users')->insert([
            'name' => 'Francis Onah',
            'email' => 'onahfa@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
