<?php

use App\Comic;
use Illuminate\Database\Seeder;

class UpdateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsFromSlack = config('comics');
        foreach($comicsFromSlack as $comic){
            $newComicConfig = new Comic();
            $newComicConfig->title = $comic['title'];
            $newComicConfig->description = $comic['description'];
            $newComicConfig->thumb = $comic['thumb'];
            $newComicConfig->price = $comic['price'];
            $newComicConfig->series = $comic['series'];
            $newComicConfig->sale_date = $comic['sale_date'];
            $newComicConfig->type= $comic['type'];
            $newComicConfig->save();

        }

    }
}
