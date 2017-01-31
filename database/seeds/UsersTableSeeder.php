<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_one = new User();
        $user_one->role_id = 2;
        $user_one->name = 'Teko Medic';
        $user_one->email = 'tech@test.com';
        $user_one->password = bcrypt('Testing');
        $user_one->save();

        $user_two = new User();
        $user_two->role_id = 1;
        $user_two->name = 'Tony Admin';
        $user_two->email = 'admin@test.com';
        $user_two->password = bcrypt('Testing');
        $user_two->save();

        $user_three = new User();
        $user_three->role_id = 2;
        $user_three->name = 'Sole Provier';
        $user_three->email = 'sole@test.com';
        $user_three->password = bcrypt('Testing');
        $user_three->save();

    }
}
