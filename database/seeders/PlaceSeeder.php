<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Place::create([
            'name'=>'hotel',
            'parent_id'=>Null,
            'adress_id'=>NULL,
            'price'=> null,
            'description' => '',
            'PhoneNumber' => '0999949989',
            'tele' => '@telee'
        ]);

        Place::create([
            'name'=>'restaurant',
            'parent_id'=>Null,
            'adress_id'=>NULL,
            'price'=> null,
            'description' => '',
            'PhoneNumber' => '0999699999',
            'tele' => '@tele0'
        ]);

        Place::create([
            'name'=>'hall',
            'parent_id'=>Null,
            'adress_id'=>NULL,
            'price'=> null,
            'description' => '',
            'PhoneNumber' => '0996699999',
            'tele' => '@tele23'
        ]);
        Place::create([
            'name'=>'four seasons',
            'parent_id'=>1,
            'adress_id'=>7,
            'price'=> 500,
            'description' => ' five star hotel , high-service and security, it is the largest hotel in syria and offers unparalleled luxury and elegance ',
            'PhoneNumber' => '0999899999',
            'tele' => '@tele99'
        ]);

        Place::create([
            'name'=>'dama rose',
            'parent_id'=>1,
            'adress_id'=>7,
            'price'=> 400,
            'description' => 'formerly known as Le Meridien Damascus , is one of the premier hotels in damascus, combines modren luxury with traditional syrian hospitality ',
            'PhoneNumber' => '0999999995',
            'tele' => '@tele5'
        ]); 

        Place::create([
            'name'=>'sheraton',
            'parent_id'=>1,
            'adress_id'=>8,
            'price'=> 450,
            'description' => 'is a lamdmark of luxury and comfort in the city it provides easy access to damascus vibrant cultural and historical sites',
            'PhoneNumber' => '0999899995',
            'tele' => '@tele1'
        ]); 

        Place::create([
            'name'=>'the palmyra hotel',
            'parent_id'=>1,
            'adress_id'=>13,
            'price'=> 350,
            'description' => 'it is a hotel in a heritage and historical place with good services and reasonable price',
            'PhoneNumber' => '0999997995',
            'tele' => '@tele3'
        ]);
        Place::create([
            'name'=>'holyday beach',
            'parent_id'=>1,
            'adress_id'=>3,
            'price'=> 500,
            'description' => 'is a hotel near the beach with a high-service and beautiful view , and it is one of the famous hotels in the city ',
            'PhoneNumber' => '0949999995',
            'tele' => '@tele4'
        ]);
        Place::create([
            'name'=>'tourist hotel',
            'parent_id'=>1,
            'adress_id'=>4,
            'price'=> 300,
            'description' => 'is the best hotel in suwayda city it provides easy access to the city centre and markets',
            'PhoneNumber' => '0919999995',
            'tele' => '@tele6'
        ]);
        Place::create([
            'name'=>'alaa aldeen',
            'parent_id'=>2,
            'adress_id'=>7,
            'price'=> 200,
            'description' => 'restaurant in the centre of the cabetal , serves western cuisine',
            'PhoneNumber' => '0966999991',
            'tele' => '@tele7'
        ]);

        Place::create([
            'name'=>'makolat alsham',
            'parent_id'=>2,
            'adress_id'=>7,
            'price'=> 250,
            'description' => 'a five star restaurant , it is the largest chain of restaurants in damascus with many branches in many places',
            'PhoneNumber' => '0999999993',
            'tele' => '@tele8'
        ]);
        Place::create([
            'name'=>'ala alnar',
            'parent_id'=>2,
            'adress_id'=>4,
            'price'=> 200,
            'description' => 'One of the most famous restaurants in Suwayda and serves delicious Western and Eastern meals',
            'PhoneNumber' => '0999889994',
            'tele' => '@tele9'
        ]);
        Place::create([
            'name'=>'alsaher',
            'parent_id'=>2,
            'adress_id'=>20,
            'price'=> 150,
            'description' => 'a restaurant near the markets and the hestorical area ,serves a westren meals',
            'PhoneNumber' => '0999933994',
            'tele' => '@tele10'
        ]);
        Place::create([
            'name'=>'AlMalaki Cafe & Restaurant',
            'parent_id'=>2,
            'adress_id'=>15,
            'price'=> 200,
            'description' => 'A famous restaurant and classified as one of the best restaurants located in the heart of the city',
            'PhoneNumber' => '0999999334',
            'tele' => '@tele11'
        ]);
        Place::create([
            'name'=>'rawaq restaurant',
            'parent_id'=>2,
            'adress_id'=>16,
            'price'=> 175,
            'description' => 'A well-serviced restaurant located in a green area and has a beautiful view in the fresh air',
            'PhoneNumber' => '0999996794',
            'tele' => '@tele12'
        ]);
        Place::create([
            'name'=>'aldar restaurant',
            'parent_id'=>2,
            'adress_id'=>12,
            'price'=> 150,
            'description' => 'A lovely small restaurant serving grilled meat in addition to oriental meals',
            'PhoneNumber' => '0952999994',
            'tele' => '@tele13'
        ]);
        Place::create([
            'name'=>'elite plaza',
            'parent_id'=>3,
            'adress_id'=>5,
            'price'=> 2000,
            'description' => 'A collection of luxurious halls with royal halls suitable for all parties and occasions',
            'PhoneNumber' => '0943999992',
            'tele' => '@tele14'
        ]);
        Place::create([
            'name'=>'aljalaa',
            'parent_id'=>3,
            'adress_id'=>8,
            'price'=> 1500,
            'description' => 'A hall in a great location on the Mezzeh highway and with beautiful decorations',
            'PhoneNumber' => '0980999992',
            'tele' => '@tele15'
        ]);
        Place::create([
            'name'=>'alasala',
            'parent_id'=>3,
            'adress_id'=>20,
            'price'=> 1000,
            'description' => 'A royal hall with a palace-like design, very suitable for weddings',
            'PhoneNumber' => '0999999962',
            'tele' => '@tele16'
        ]);
        Place::create([
            'name'=>'lotus hall',
            'parent_id'=>3,
            'adress_id'=>4,
            'price'=> 1700,
            'description' => 'A hall in the center of Suwayda Governorate with good services and beautiful decorations',
            'PhoneNumber' => '0999998992',
            'tele' => '@tele17'
        ]);
        Place::create([
            'name'=>'lamera',
            'parent_id'=>3,
            'adress_id'=>3,
            'price'=> 1750,
            'description' => 'It is one of the best wedding venues in Latakia and the most popular choice among grooms.',
            'PhoneNumber' => '0999999902',
            'tele' => '@tele18'
        ]);
        Place::create([
            'name'=>'afamia',
            'parent_id'=>3,
            'adress_id'=>18,
            'price'=> 1550,
            'description' => 'Perfectly designed to meet the requirements of any event or conference.
             The resort provides efficient services and facilities.',
            'PhoneNumber' => '0999935992',
            'tele' => '@tele19'
        ]);
        Place::create([
            'name'=>'roze',
            'parent_id'=>3,
            'adress_id'=>2,
            'price'=> 1000,
            'description' => 'A hall suitable for weddings and all occasions with nice services and decorations',
            'PhoneNumber' => '0999999123',
            'tele' => '@tele20'
        ]);
        Place::create([
            'name'=>'zanobia',
            'parent_id'=>3,
            'adress_id'=>2,
            'price'=> 1400,
            'description' => 'The most famous halls in Homs and the hall provides its services to the public and is used for concerts and conferences.',
            'PhoneNumber' => '0999999912',
            'tele' => '@tele21'
        ]);



    }
}
