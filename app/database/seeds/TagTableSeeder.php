<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TagTableSeeder extends Seeder {

	public function run()
	{
		$tag1 = new Tag();
		$tag1->name = 'developer';
		$tag1->save();

		$tag2 = new Tag();
		$tag2->name = 'javascript';
		$tag2->save();

		$tag3 = new Tag();
		$tag3->name = 'linux';
		$tag3->save();

		$tag4 = new Tag();
		$tag4->name = 'arduino';
		$tag4->save();
	}

}