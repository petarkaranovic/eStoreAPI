<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name='Admin';
        $user->email='admin@test.com';
        $user->password=bcrypt('secret123');
        $user->is_admin=true;
        $user->save();
    }
}
