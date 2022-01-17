<?php
use App\Models\House;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $_house = new House();
            $_house->image = $faker->imageUrl();
            $_house->address = $faker->streetAddress();
            $_house->city = $faker->city();
            $_house->post_code = $faker->randomElement(['ABC123','EFG456','HAS789']);
            $_house->rooms = $faker->numberBetween(3,5);
            $_house->square_meters = $faker->numberBetween(200,400);
            $_house->for_sale = $faker->boolean();
            $_house->to_late = $faker->boolean();
            $_house->is_available = $faker->boolean(100);
            $_house->save();
        }
        
        /* $houses =[
                [
                    'image' => 'https://picsum.photos/id/1015/400/300',
                    'address' => '6th Avenue 123',
                    'city' => 'New York City',
                    'post_code' => 'NYC123',
                    'rooms' => 4,
                    'square_meters' => 200,
                    'for_sale' => false,
                    'to_late' => true,
                    'is_available' => true,
                ],
                [
                    'image' => 'https://picsum.photos/id/1025/400/300',
                    'address' => '6th Avenue 123',
                    'city' => 'New York City',
                    'post_code' => 'NYC123',
                    'rooms' => 4,
                    'square_meters' => 200,
                    'for_sale' => false,
                    'to_late' => true,
                    'is_available' => true,
                ],
                [
                    'image' => 'https://picsum.photos/id/1022/400/300',
                    'address' => '6th Avenue 123',
                    'city' => 'New York City',
                    'post_code' => 'NYC123',
                    'rooms' => 4,
                    'square_meters' => 200,
                    'for_sale' => false,
                    'to_late' => true,
                    'is_available' => true,
                ],
                [
                    'image' => 'https://picsum.photos/id/1019/400/300',
                    'address' => '6th Avenue 123',
                    'city' => 'New York City',
                    'post_code' => 'NYC123',
                    'rooms' => 4,
                    'square_meters' => 200,
                    'for_sale' => false,
                    'to_late' => true,
                    'is_available' => true,
                ],
        ]; */

        /* foreach ($houses as $house) {
            $_house = new House();
            $_house->image = $house['image'];
            $_house->address = $house['address'];
            $_house->city = $house['city'];
            $_house->post_code = $house['post_code'];
            $_house->rooms = $house['rooms'];
            $_house->square_meters = $house['square_meters'];
            $_house->for_sale = $house['for_sale'];
            $_house->to_late = $house['to_late'];
            $_house->is_available = $house['is_available'];
            $_house->save();
        } */
    }
}
