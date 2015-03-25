<?php

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder {

	/**
	 * Run the page table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('pages')->delete();

        for ($i = 0; $i < 10; ++$i) {
            Page::create([
                'title' => 'Title'.$i,
                'slug' => 'demo page',
                'body' => 'Body'.$i,
                "user_id" => 1,
            ]);
        }
	}

}
