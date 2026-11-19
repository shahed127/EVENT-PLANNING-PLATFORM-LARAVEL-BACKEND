<?php

namespace Database\Seeders;

use App\Models\Dress_And_Makeup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dress_And_MakeupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Dress_And_Makeup::create([
            'type' => 'Men Clothing',
            'parent_id' => NULL,
            'price'=> null,
            'image' => '',
            'description' => '',
        ]);


        Dress_And_Makeup::create([
            'type' => 'Women Clothing',
            'parent_id' => NULL,
            'price'=> null,
            'image' => '',
            'description' => '',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Men Grooming',
            'parent_id' => NULL,
            'price'=> null,
            'image' => '',
            'description' => '',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Women Makeup',
            'parent_id' => NULL,
            'price'=> null,
            'image' => '',
            'description' => '',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Jewelry',
            'parent_id' => NULL,
            'price'=> null,
            'image' => '',
            'description' => '',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Men Suit',
            'parent_id' => 1,
            'price'=> 600,
            'image' => '',
            'description' => 'Elegant suits for men, perfect for formal events and weddings.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Formal Tuxedo',
            'parent_id' => 1,
            'price'=> 550,
            'image' => '',
            'description' => 'Sophisticated formal tuxedos, ideal for black-tie events and weddings.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Men Casual Wear',
            'parent_id' => 1,
            'price'=> 300,
            'image' => '',
            'description' => 'Comfortable and stylish casual wear for men, suitable for everyday use.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Evening Gown',
            'parent_id' => 2,
            'price'=> 500,
            'image' => '',
            'description' => 'Beautiful evening gowns, perfect for formal occasions and parties.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Bridal Dress',
            'parent_id' => 2,
            'price'=> 3000,
            'image' => '',
            'description' => 'Exquisite bridal dresses for a stunning look on your special day.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Simple Dress',
            'parent_id' =>2,
            'price'=> 700,
            'image' => '',
            'description' => 'Elegant yet simple dresses, suitable for both casual and semi-formal occasions.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Women Casual Wear',
            'parent_id' => 2,
            'price'=> 500,
            'image' => '',
            'description' => 'Chic and comfortable casual wear for women, perfect for daily outings.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Beard Trimming',
            'parent_id' =>3 ,
            'price'=> 70,
            'image' => '',
            'description' => 'Professional beard trimming services for a neat and stylish look.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Hair Styling',
            'parent_id' => 3,
            'price'=> 100,
            'image' => '',
            'description' => 'Hair styling services for men, offering trendy and classic styles.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Bridal Makeup',
            'parent_id' => 4,
            'price'=> 550,
            'image' => '',
            'description' => 'Exquisite bridal makeup services for a stunning look on your special day.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Party Makeup',
            'parent_id' => 4,
            'price'=> 200,
            'image' => '',
            'description' => 'Glamorous makeup services for parties and special events.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Gold Necklace',
            'parent_id' => 5,
            'price'=> 8000,
            'image' => '',
            'description' => 'Luxurious gold necklaces, perfect for adding elegance to any outfit.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Diamond Ring',
            'parent_id' => 5,
            'price'=> 200000,
            'image' => '',
            'description' => 'Stunning diamond rings, a timeless symbol of elegance and love.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Silver Bracelet',
            'parent_id' => 5,
            'price'=> 60,
            'image' => '',
            'description' => 'Elegant silver bracelets, perfect for everyday wear or special occasions.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Earrings',
            'parent_id' => 5,
            'price'=> 50,
            'image' => '',
            'description' => 'Beautiful earrings, adding a touch of sparkle to any outfit.',
        ]);
        Dress_And_Makeup::create([
            'type' => 'Necklace',
            'parent_id' => 5,
            'price'=> 70,
            'image' => '',
            'description' => 'Stylish necklaces, available in various designs and materials.',
        ]);
    }
}
