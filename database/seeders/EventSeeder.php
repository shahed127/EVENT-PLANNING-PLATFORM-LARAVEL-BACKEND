<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'categories'=>'wedding',
            'image'=> ''
        ]);
        Event::create([
            'categories'=>'party',
            'image'=> ''
        ]);
        Event::create([
            'categories'=>'family',
            'image'=> ''
        ]);
        Event::create([
            'categories'=>'birthday party',
            'image'=> ''
        ]);
        Event::create([
            'categories'=>'graduation',
            'image'=> ''
        ]);
        Event::create([
            'categories'=>'concert',
            'image'=> ''
        ]);

    }
}
