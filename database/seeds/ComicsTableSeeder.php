<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_first_array = [
            [
                'title' => 'Titolo di prova',
                'description' => 'Descrizione di prova'
            ]
        ];
        foreach ($comics_first_array as $arrayDiProva) {
            $newComic = new Comic();
            $newComic->title = $arrayDiProva['title'];
            $newComic->description = $arrayDiProva['description'];
            $newComic->save();
        }
    }
}
