<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

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
            "title" =>fake()->name(),
            "slug" =>str()->slug(fake()->name()),
            "user_id" =>1,
            "category_id" =>1,
            "sub_category_id" =>1,
            "featured_img_url" => "https://picsum.photos/id/13/1200/600",
        ];
    }
}
