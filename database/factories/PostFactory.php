<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'judul' => $this->faker->sentence(mt_rand(2,8)),
            'sedikit' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(5,10)),
            'user_id' => mt_rand(1,10),
            'kategori_id' => mt_rand(1,2)
        ];
    }
}
