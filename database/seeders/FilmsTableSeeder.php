<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            [
                'nom'=> 'La Matrice Rechargée',
                'duree'=> 138.0,
                'cote'=> 7.2,
                'realisateur'=>'Les Wahowski',
                'genre'=>'Science-Fiction',
                'image'=>'image/Films/Matrix.jpeg',
                'preview'=>'https://www.youtube.com/embed/kYzz0FSgpSU',
            ],
            [
                'nom'=> 'SOS Fantômes',
                'duree'=> 105.0,
                'cote'=> 7.8,
                'realisateur'=>'Ivan Reitman',
                'genre'=>'Horreur',
                'image'=>'image/Films/Ghost.jpg',
                'preview'=>'https://www.youtube.com/embed/6hDkhw5Wkas',

            ],
            [
                'nom'=> 'Un enfant et son atôme',
                'duree'=> 2.0,
                'cote'=> 6.8,
                'realisateur'=>'IBM',
                'genre'=>'Court-Métrage',
                'image'=>'image/Films/ABoy.jpg',
                'preview'=>'https://www.youtube.com/embed/oSCX78-8-q0',
            ],
            [
                'nom'=> 'Alien',
                'duree'=> 117.0,
                'cote'=> 8.5,
                'realisateur'=>'Ridley Scott',
                'genre'=>'Horreur',
                'image'=>'image/Films/Alien.jpeg',
                'preview'=>'https://www.youtube.com/embed/jQ5lPt9edzQ',
            ],
            [
                'nom'=> 'Avatar',
                'duree'=> 162.0,
                'cote'=> 7.8,
                'realisateur'=>'James Cameron',
                'genre'=>'Science-Fiction',
                'image'=>'image/Films/Avatar.jpg',
                'preview'=>'https://www.youtube.com/embed/5PSNL1qE6VY',
            ],
            [
                'nom'=> 'La Chose',
                'duree'=> 109.0,
                'cote'=> 8.2,
                'realisateur'=>'John Carpenter',
                'genre'=>'Horreur',
                'image'=>'image/Films/Thing.jpg',
                'preview'=>'https://www.youtube.com/embed/5ftmr17M-a4',
            ],
            [
                'nom'=> 'Parc Jurassique',
                'duree'=> 128,
                'cote'=> 8.2,
                'realisateur'=>'Steven Spielberg',
                'genre'=>'Horreur',
                'image'=>'image/Films/JurassicPark.jpg',
                'preview'=>'https://www.youtube.com/embed/lc0UehYemQA',
            ],
            [
                'nom'=> 'Tenacisous D et le Médiator du Destin',
                'duree'=> 94,
                'cote'=> 6.8,
                'realisateur'=>'Liam Lynch',
                'genre'=>'Comédie',
                'image'=>'image/Films/D.jpg',
                'preview'=>'https://www.youtube.com/embed/2tvKDAW6Flk',
            ],
            [
                'nom'=> 'Shrek',
                'duree'=> 89,
                'cote'=> 7.9,
                'realisateur'=>'Andrew Adamson',
                'genre'=>'Comédie',
                'image'=>'image/Films/Shrek.jpg',
                'preview'=>'https://www.youtube.com/embed/CwXOrWvPBPk"',
            ],
            [
                'nom'=> 'La Guerres des Étoiles: Un nouvel espoir',
                'duree'=> 121,
                'cote'=> 8.6,
                'realisateur'=>'Goerge Lucas',
                'genre'=>'Science-Fiction',
                'image'=>'image/Films/ANewHope.jpeg',
                'preview'=>'https://www.youtube.com/embed/vZ734NWnAHA',
            ]
        

            

        ]);
    }
}
