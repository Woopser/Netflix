<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acteurs')->insert([
            [
                'nom'=> 'Reeves',
                'age'=>58,
                'taille'=>186,
                'prenom'=>'Keanu',
                'image'=>'image/acteurs/KeanuReeves.jpg',
            ],
            [
                'nom'=> 'Fishburne',
                'age'=>61,
                'taille'=>184,
                'prenom'=>'Laurence',
                'image'=>'image/acteurs/LaurenceFishburne.jpg',
            ],
            [
                'nom'=> 'Murray',
                'age'=>72,
                'taille'=>188,
                'prenom'=>'Bill',
                'image'=>'image/acteurs/BillMurray.jpg',
            ],
            [
                'nom'=> 'Aykroyd',
                'age'=>70,
                'taille'=>185,
                'prenom'=>'Dan',
                'image'=>'image/acteurs/DanAykroyd.jpg',
            ],
            [
                'nom'=> 'atom',
                'age'=>100000,
                'taille'=>1,
                'prenom'=>'Boy',
                'image'=>'image/acteurs/AtomBoy.jpg',
            ],
            [
                'nom'=> 'Weaver',
                'age'=>73,
                'taille'=>182,
                'prenom'=>'Sigourney',
                'image'=>'image/acteurs/SigourneyWeaver.jpg',
            ],
            [
                'nom'=> 'Skerritt',
                'age'=>89,
                'taille'=>183,
                'prenom'=>'Tom',
                'image'=>'image/acteurs/TomSkerritt.jpg',
            ],
            [
                'nom'=> 'Worthington',
                'age'=>89,
                'taille'=>178,
                'prenom'=>'Sam',
                'image'=>'image/acteurs/SamWorthington.jpg', 
            ],
            [
                'nom'=> 'Saldaña',
                'age'=>44,
                'taille'=>170,
                'prenom'=>'Zoe',
                'image'=>'image/acteurs/ZoeSaldana.jpg',
            ],
            [
                'nom'=> 'Russell',
                'age'=>71,
                'taille'=>180,
                'prenom'=>'Kurt',
                'image'=>'image/acteurs/KurtRussell.jpg',
            ],
            [
                'nom'=> 'David',
                'age'=>71,
                'taille'=>188,
                'prenom'=>'Keith',
                'image'=>'image/acteurs/KeithDavid.jpg', 
            ],
            [
                'nom'=> 'Dern',
                'age'=>55,
                'taille'=>182,
                'prenom'=>'Laura',
                'image'=>'image/acteurs/LauraDern.jpg',

            ],
            [
                'nom'=> 'Black',
                'age'=>53,
                'taille'=>168,
                'prenom'=>'Jack',
                'image'=>'image/acteurs/JackBlack.jpg', 
            ],
            [
                'nom'=> 'Gass',
                'age'=>62,
                'taille'=>175,
                'prenom'=>'Kyle',
                'image'=>'image/acteurs/KyleGass.jpg',
            ],
            [
                'nom'=> 'Myers',
                'age'=>59,
                'taille'=>173,
                'prenom'=>'Mike',
                'image'=>'image/acteurs/MikeMyers.jpg',
            ],
            [
                'nom'=> 'Murhpy',
                'age'=>61,
                'taille'=>175,
                'prenom'=>'Eddie',
                'image'=>'image/acteurs/EddieMurphy.jpg',
            ],
            [
                'nom'=> 'Hamill',
                'age'=>71,
                'taille'=>175,
                'prenom'=>'Mark',
                'image'=>'image/acteurs/MarkHamill.jpg',
            ],
            [
                'nom'=> 'Ford',
                'age'=>80,
                'taille'=>185,
                'prenom'=>'Harrisson',
                'image'=>'image/acteurs/HarrisonFord.jpg',
            ]
            
            ]);
    }
}
