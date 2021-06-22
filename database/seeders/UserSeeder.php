<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();



        foreach(range(1,10) as $value){
            // DB::table('users')->insert([ //random number seed
            //     'name' => Str::random(10) ,
            //     'email' => Str::random(10).'@gmail.com' ,
            //     'password' => Hash::make(Str::random(10)),
            // ]);

            // DB::table('users')->insert([ //fake value seed
            //     'name' => $faker->name ,
            //     'email' => $faker->email ,
            //     'password' => $faker->password,
            // ]);

            $User = new User(); // use model seed
            $User->name = $faker->name;
            $User->email = $faker->email;
            $User->password =Hash::make('12345678') ;
            $User->save();
        }
    }
}
