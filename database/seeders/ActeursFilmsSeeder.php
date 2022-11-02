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
                'films_id'=>'1',
                'acteurs_id'=>'1',
            ],
            [
                'films_id'=>'1',
                'acteurs_id'=>'2',
            ],
            [
                'films_id'=>'2',
                'acteurs_id'=>'3',
            ],
            [
                'films_id'=>'2',
                'acteurs_id'=>'4',
            ],
            [
                'films_id'=>'3',
                'acteurs_id'=>'5',
            ],
            [
                'films_id'=>'4',
                'acteurs_id'=>'6',
            ],
            [
                'films_id'=>'4',
                'acteurs_id'=>'7',
            ],
            [
                'films_id'=>'5',
                'acteurs_id'=>'8',
            ],
            [
                'films_id'=>'5',
                'acteurs_id'=>'9',
            ],
            [
                'films_id'=>'6',
                'acteurs_id'=>'10',
            ],
            [
                'films_id'=>'6',
                'acteurs_id'=>'11',
            ],
            [
                'films_id'=>'7',
                'acteurs_id'=>'12',
            ],
            [
                'films_id'=>'8',
                'acteurs_id'=>'13',
            ],
            [
                'films_id'=>'8',
                'acteurs_id'=>'14',
            ],
            [
                'films_id'=>'9',
                'acteurs_id'=>'15',
            ],
            [
                'films_id'=>'9',
                'acteurs_id'=>'16',
            ],
            [
                'films_id'=>'10',
                'acteurs_id'=>'17',
            ],
            [
                'films_id'=>'10',
                'acteurs_id'=>'18',
            ],
        ]);
    }
}
