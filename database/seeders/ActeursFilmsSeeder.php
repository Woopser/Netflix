<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursFilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acteur_film')->insert([
            [
                'film_id'=>'1',
                'acteur_id'=>'1',
            ],
            [
                'film_id'=>'1',
                'acteur_id'=>'2',
            ],
            [
                'film_id'=>'2',
                'acteur_id'=>'3',
            ],
            [
                'film_id'=>'2',
                'acteur_id'=>'4',
            ],
            [
                'film_id'=>'3',
                'acteur_id'=>'5',
            ],
            [
                'film_id'=>'4',
                'acteur_id'=>'6',
            ],
            [
                'film_id'=>'4',
                'acteur_id'=>'7',
            ],
            [
                'film_id'=>'5',
                'acteur_id'=>'8',
            ],
            [
                'film_id'=>'5',
                'acteur_id'=>'9',
            ],
            [
                'film_id'=>'6',
                'acteur_id'=>'10',
            ],
            [
                'film_id'=>'6',
                'acteur_id'=>'11',
            ],
            [
                'film_id'=>'7',
                'acteur_id'=>'12',
            ],
            [
                'film_id'=>'8',
                'acteur_id'=>'13',
            ],
            [
                'film_id'=>'8',
                'acteur_id'=>'14',
            ],
            [
                'film_id'=>'9',
                'acteur_id'=>'15',
            ],
            [
                'film_id'=>'9',
                'acteur_id'=>'16',
            ],
            [
                'film_id'=>'10',
                'acteur_id'=>'17',
            ],
            [
                'film_id'=>'10',
                'acteur_id'=>'18',
            ],
        ]);
    }
}
