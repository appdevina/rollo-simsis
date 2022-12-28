<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class db_seeder_siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        $gender = $faker->randomElement(['male', 'female']);
        $agama = $faker->randomElement(['islam', 'hindu', 'buddha']);

        for ($i = 0; $i < $limit; $i++){
            DB::table('siswa')->insert([
                'nama_depan' => $faker->name,
                'nama_belakang' => $faker->lastName,
                'jenis_kelamin' => $gender,
                'agama' => $agama,
                'alamat' => $faker->address,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
