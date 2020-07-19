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
        $user =new User();
        $user->name="Nuttawut";
        $user->email="60143610@cmru.ac.th";
        $user->password= bcrypt("1234");
        $user->save();
    }
}
