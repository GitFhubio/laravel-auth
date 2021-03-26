<?php

use App\Pizza;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $pizzas=[[
        //     'name'=>'diavola',
        //     'price'=>'3.4',
        //     'description'=>'lalala',
        //     'cover'=>'https://via.placeholder.com/90'
        // ],[
        //     'name'=>'quattroformaggi',
        //     'price'=>'3.4',
        //     'description'=>'lalala',
        //     'cover'=>'https://via.placeholder.com/90'
        // ],
        // [
        //     'name'=>'dartigian',
        //     'price'=>'3.4',
        //     'description'=>'lalala',
        //     'cover'=>'https://via.placeholder.com/90'
        // ]];
        // $pizza = new Pizza();
        // $pizza->name ='diavola';
        // $pizza->price=3.4;
        // $pizza->description='lalala';
        // $pizza->cover='https://via.placeholder.com/90';
        // $pizza->save();


//     foreach($pizzas as $pizza){
//  $pizza = new Pizza();
//         $pizza->name =$pizza['name'];
//         $pizza->price=$pizza['price'];
//         $pizza->description=$pizza['description'];
//         $pizza->cover=$pizza['cover'];
//         $pizza->save();

//     }
for ($i=0;$i<20;$i++) {
    $pizza = new Pizza();
    $pizza->name=$faker->name();
    // $pizza->price=3.4;
    $pizza->price=$faker->randomDigit;
    $pizza->description= $faker->text(10);
    $pizza->cover ='https://via.placeholder.com/90';
    $pizza->save();
}
}
}
