<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(User::class)->times(50)->create();

        $user = User::find(1);
        $user->name = 'yuan';
        $user->email = '1342479179@qq.com';
        $user->password = bcrypt('zxcv1234');
        $user->is_admin = true;
        $user->save();
    }
}
