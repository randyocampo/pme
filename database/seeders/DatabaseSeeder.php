<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();

        $gender = $faker->randomElement(['male', 'female']);

    	foreach (range(1,200) as $index) {
            DB::table('tblmnes')->insert([
                'year_covered' => $faker->randomNumber(),
                'region' => $faker->text,
                'province' => $faker->text,
                'municipality' => $faker->text,
                'barangay' => $faker->text,
                'projectid' => $faker->name,
                'projecttitle' => $faker->name,
                'individual' => $faker->randomNumber(),
                'association' => $faker->randomNumber(),
                'members' => $faker->randomNumber(),
            ]);
        }

    }
}
