<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nam Vu',
            'email' => 'namvu1210@gmail.com',
            'password' => bcrypt('123456'),
            'api_token' => 'fDqQVugU5HdO9ayzCtxIEZiNb17LR2e6',
        ]);
    }
}
