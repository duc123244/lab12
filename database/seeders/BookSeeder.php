<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
       

        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'thumbnail' => 'https://images.app.goo.gl/6XdrtD7TbkodwQBQ9',
                'author' => $faker->name,
                'publisher' => $faker->company,
                'publication' => $faker->date,
                'price' => $faker->randomFloat(2, 10, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'category_id' => rand(1, 4),
            ]);
    }
}
}
