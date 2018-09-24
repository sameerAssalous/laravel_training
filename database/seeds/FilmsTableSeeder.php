<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Film;
use App\Genre;
use App\Comment;
class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $faker = \Faker\Factory::create();
		$dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        $countries = ['USA','Germany','England','Egypt'];
        $genres = ['action','action','documentary','Animation'];
        // And now, let's create a few articles in our database:
        

        for ($i = 1; $i < 4; $i++) {
            $film = Film::create([
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
                'release_date' => $dateNow,
                'rating' => rand(1,5),
                'ticket_price' => rand(1,1000),
                'country' => $countries[rand(0,3)],
                'photo' => 'img/film_image.jpg',
            ]);

            $film->comments()->create([
			        'name' => $faker->word,
			        'email' => $faker->word.'@gmail.com',
			        'body' => $faker->paragraph,
			    ]);
            $film->genres()->create([
			        'name' => $genres[rand(0,3)],
			    ]);
        }

    }
}
            
