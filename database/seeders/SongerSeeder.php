<?php

namespace Database\Seeders;

use App\Models\Songer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Songer::create([
            'name' => 'Rock',
            'parent_id' => NULL,
            'price' => null,
            'description' => 'Rock music genre',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'Pop',
            'parent_id' => NULL,
            'price' => null,
            'description' => 'Pop music genre',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'Classical',
            'parent_id' => NULL,
            'price' => null,
            'description' => 'Classical music genre',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'Jazz',
            'parent_id' => NULL,
            'price' => null,
            'description' => 'Jazz music genre',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'DJ',
            'parent_id' => NULL,
            'price' => null,
            'description' => 'DJ services and equipment',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'Stereo',
            'parent_id' => NULL,
            'price' => null,
            'description' => 'Stereo systems and equipment',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'Singer',
            'parent_id' => NULL,
            'price' => null,
            'description' => '',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'Classic Rock',
            'parent_id' => 1,
            'price' => 75,
            'description' => 'Classic Rock hits from the 70s and 80s',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'Modern Pop',
            'parent_id' => 2,
            'price' => 75,
            'description' => 'Top modern pop hits',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'Symphony Orchestra',
            'parent_id' => 3,
            'price' => 70,
            'description' => 'Full symphony orchestra performances',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'Smooth Jazz',
            'parent_id' => 4,
            'price' => 75,
            'description' => 'Smooth jazz tracks perfect for relaxation',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'Professional DJ Setup',
            'parent_id' => 5,
            'price' => 80,
            'description' => 'Full professional DJ setup including turntables, mixer, and speakers',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'DJ Services for Events',
            'parent_id' => 5,
            'price' => 110,
            'description' => 'DJ services for weddings, parties, and other events',
            'image' => '',
        ]);

        Songer::create([
            'name' => 'Home Stereo System',
            'parent_id' => 6,
            'price' => 150,
            'description' => 'High-quality home stereo system with surround sound',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'Portable Stereo',
            'parent_id' => 6,
            'price' => 150,
            'description' => 'Portable stereo system with Bluetooth connectivity',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'amr diab',
            'parent_id' => 7,
            'price' => 600,
            'description' => 'arabic songer',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'sherine',
            'parent_id' => 7,
            'price' => 550,
            'description' => 'arabic songer',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'ed sheeran',
            'parent_id' => 7,
            'price' => 700,
            'description' => 'english singer',
            'image' => '',
        ]);
        Songer::create([
            'name' => 'ariana grande',
            'parent_id' => 7,
            'price' => 650,
            'description' => 'english singer',
            'image' => '',
        ]);
    }
}
