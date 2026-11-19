<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food::create([
            'categories'=>'main meal',
            'parent_id'=>NULL,
            'price'=> null,
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'snack',
            'parent_id'=>NULL,
            'price'=> null,
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'dessert',
            'parent_id'=>NULL,
            'price'=> null,
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'drink',
            'parent_id'=>NULL,
            'price'=> null,
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'kresby',
            'parent_id'=>1,
            'price'=> 80,
            'description' => 'Crispy chicken fingers fried in oil with salad and a little mayonnaise sauce on the side
            Maybe it will be the best choice',
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'zinger',
            'parent_id'=>1,
            'price'=> 90,
            'description' => 'spicy,breaded chicken fillet served in a bun with lettuce and mayonnaise, accompanied by
            a fries and a drink',
            'image'=>'',
        ]);

        Food::create([
            'categories'=>'pizza',
            'parent_id'=>1,
            'price'=> 60,
            'description' => 'delicious pizza made with a crispy,golden crust and topped with the freshest ingredients',
            'image'=>'',
        ]);

        Food::create([
            'categories'=>'shawarma',
            'parent_id'=>1,
            'price'=> 25,
            'description' => 'tender slices of marinated meat slow-cooked on a vertical rotisserie served in warm bread with
            fresh vegetables , garlic sauce and tahini',
            'image'=>'',
        ]);

        Food::create([
            'categories'=>'caesar salad',
            'parent_id'=>2,
            'price'=> 20,
            'description' => 'romaine lettuce , creamy Caesar dressing, crunchy croutons and parmesan cheese',
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'coleslaw',
            'parent_id'=>2,
            'price'=> 15,
            'description' => 'shredded cabbage and carrots , tossed in a tangy. slightly sweet dressing',
            'image'=>'',
        ]);

        Food::create([
            'categories'=>'hummus',
            'parent_id'=>2,
            'price'=> 10,
            'description' => 'creamy hummus , a blend of chickpeas, tahini, lemon and garlic served with warm bread',
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'crepes',
            'parent_id'=>3,
            'price'=> 25,
            'description' => 'made fresh to order and filled with your choice of sweet ingredients like nutella and strawberries',
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'icecream',
            'parent_id'=>3,
            'price'=> 5,
            'description' => 'rich and creamy ice cream , available in a variety of irresistible flavors from classic 
            vanilla and chocolate to more adventurous options',
            'image'=>'',
        ]);

        Food::create([
            'categories'=>'tiramisu',
            'parent_id'=>3,
            'price'=> 35,
            'description' => 'creamy dessert layered with espresso-soaked ladyfingers , mascarpone cheese
            and a dusting of cocoa powder',
            'image'=>'',
        ]);

        Food::create([
            'categories'=>'cake',
            'parent_id'=>3,
            'price'=> 95,
            'description' => 'moist and flavorful cakes, baked to perfection with the finest ingredients 
            they are a delicious treat for any occasion',
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'fresh juice',
            'parent_id'=>4,
            'price'=> 25,
            'description' => 'freshly sequeezed juices , made frm the ripest , juiciest fruits like orange or mango 
            or watermelon juice',
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'coffee',
            'parent_id'=>4,
            'price'=> 20,
            'description' => 'freshly brewed coffee crafted from high-qualitybeans whether you prefer a strong
            espresso , a creamy latte or a smooth cappuccino',
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'tea',
            'parent_id'=>4,
            'price'=> 20,
            'description' => 'steaming cup of finest tea , carefully selected from the best tea gardens',
            'image'=>'',
        ]);
        Food::create([
            'categories'=>'beer',
            'parent_id'=>4,
            'price'=> 22,
            'description' => 'refreshing glass of beer brewed to perfection with a rich , malty flavor and smooth finish',
            'image'=>'',
        ]);




    }
}
