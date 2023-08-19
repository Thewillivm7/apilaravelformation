<?php

namespace Database\Seeders;

use App\Models\Annonce;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Annonce::create([
            'titre'=>'Telephone portable',
           'description'=>'Techno',
           'image'=>'https://www.negoce.ci/9469-large_default/tecno-spark-10-pro-8gb-256go.jpg',
           'telephone'=>'0150183273',
            'prix'=>122000,
            'categorie_id'=>1,
        ]);
        Annonce::create([
            'titre'=>'Polo',
           'description'=>'lacoste',
           'image'=>'https://www.negoce.ci/9469-large_default/tecno-spark-10-pro-8gb-256go.jpg',
           'telephone'=>'0150183273',
            'prix'=>10000,
            'categorie_id'=>2,
        ]);
    }
}
