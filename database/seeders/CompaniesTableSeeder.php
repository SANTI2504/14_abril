<?php

namespace Database\Seeders;
use App\Models\Company;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // declaramos la variable $faker para llamar a Faker y hacemos uso de su libreria
        $faker = Faker::create();

        //creamos un ciclo para generar n cantidad de datos a la bd
        for ($i=0; $i<=50; $i++){

            // llamamos al modelo para poder hacer uso de el y asignarle los datos
            Company::create([
                'name_company'=> $faker->company,
                'nit'=> $faker ->isbn10,
                'address'=> $faker ->address,
                'logo'=> $faker ->imageUrl()

            ]);

        }
    }
}
