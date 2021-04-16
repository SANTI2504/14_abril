<?php

namespace Database\Seeders;
use App\Models\User;
// el as faker es para llamar la libreria con ese nombre
use Faker\Factory as Faker;
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
        //declarar la variable faker para llamar a Faker
        $faker = Faker::create();

        for ($i=0; $i<=20;$i++){
            //llama al modelo para crear datos a la bd
            User::create([
                'name'=> $faker->name,
                'lastname'=> $faker->lastName,
                'email'=> $faker->email

            ]);
        }
    }
}
