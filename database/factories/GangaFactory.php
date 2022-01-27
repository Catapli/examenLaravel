<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GangaFactory extends Factory
{
    /**
     * Define the  model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $precio = $this->faker->randomFloat(2, 1, 100 );
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'url' => "https://empresas.blogthinkbig.com/wp-content/uploads/2019/11/Imagen3-245003649.jpg?w=800",
            'category_id' => Category::inRandomOrder()->first()->id,
            'points' => $precio,
            'img' => "/storage/img/1-ganga-severa.png",
            'price' => $precio,
            'discount_price' => $precio * 0.20,
            'available' => $this->faker->boolean(),
        ];

    }
}
