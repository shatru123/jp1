<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        $first_name = "Shatrughna Ambhore";
        $primary_email = "ambhoreshatrughna@gmail.com";
        $primary_phone = "9604466334";

        $user = new User;
        $user->name =  $first_name;
        $user->email = $primary_email;
        $user->mobile = $primary_phone;
        $user->password = bcrypt("123456");
        $user->save();
    }
}
