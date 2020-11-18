<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FilmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Film::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = Str::title($this->faker->word) . ' ' . Str::title($this->faker->word);
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'user_id' => User::factory(),
            'description' => $this->faker->sentence(),
            'released_date' => $this->faker->date(),
            'rating' => random_int(2, 5),
            'ticket_price' => $this->faker->randomFloat(2, 200, 500),
            'country' => $this->faker->country,
            'poster' => $this->faker->randomElement([
                'http://image.tmdb.org/t/p/w500//5KCVkau1HEl7ZzfPsKAPM0sMiKc.jpg',
                'http://image.tmdb.org/t/p/w500//y95lQLnuNKdPAzw9F9Ab8kJ80c3.jpg',
                'http://image.tmdb.org/t/p/w500//4TKdguyacjYrC1Hnbi3PjSP8r3M.jpg',
                'http://image.tmdb.org/t/p/w500//9DKunkJiOxInOXZsk22bULt1428.jpg',
                'http://image.tmdb.org/t/p/w500//2DyEk84XnbJEdPlGF43crxfdtHH.jpg',
                'http://image.tmdb.org/t/p/w500//uJMknKxZagbhAYiiMjEaFnsZzRR.jpg',
                'http://image.tmdb.org/t/p/w500//zdnChkdppJjXl8lvwRz8vn6cs2s.jpg',
                'http://image.tmdb.org/t/p/w500//ollPAAAgZ7euU8VisfqU3cuXhZ6.jpg',
                'http://image.tmdb.org/t/p/w500//8v3Sqv9UcIUC4ebmpKWROqPBINZ.jpg',
                'http://image.tmdb.org/t/p/w500//ajB6cGvoy04438RzvfO6Sz28yMK.jpg'
            ]),
            'status' => 1,
        ];
    }
}
