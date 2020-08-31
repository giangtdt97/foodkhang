<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('blogs')->insert([
                'title' => $faker->title(),
                'excerpt' => $faker->text(),
                'body' => $faker->text(),
                'image' => $faker->image(),
                'slug' => $faker->text(),
                'featured' => $faker->boolean(),
            ]);
        }
    }
}
