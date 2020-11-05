<?php
use Illuminate\Database\Seeder;
use App\Author;
use App\Author_info;
use Faker\Generator as Faker;
class AuthorInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $authors = Author::all();

      for($i = 0; $i<count($authors); $i++){
          $newInfo = new Author_info;
          $newInfo->authors_id = $authors[$i]->id;
          $newInfo->nationality = $faker->word;
          $newInfo->save();
    }
  }
}
