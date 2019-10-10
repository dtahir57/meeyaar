<?php

use App\User;
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
        $user = new User;
        $user->name = 'Danish Tahir';
        $user->email = 'dtahir57@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('Super_User');
    }
}
