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
        DB::table('blogs')->insert([
            'author_id'=>'1',
            'title'=>'How To Cook The Spicy Chinese Noodle For Cold Weather',
            'seo_title'=>'How To Cook The Spicy Chinese Noodle For Cold Weather',
            'excerpt'=>'How To Cook The Spicy Chinese Noodle For Cold Weather',
            'body'=>'How To Cook The Spicy Chinese Noodle For Cold Weather',
            'image'=>'How To Cook The Spicy Chinese Noodle For Cold Weather',
            'slug'=>'How To Cook The Spicy Chinese Noodle For Cold Weather',
            'meta_description'=>'How To Cook The Spicy Chinese Noodle For Cold Weather',
            'mete_keyword'=>'How To Cook The Spicy Chinese Noodle For Cold Weather',
            'status'=>'1',
            'featured'=>'1'
        ]);
    }
}
