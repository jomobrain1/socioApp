<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->text(30),
            'user_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'image' => $this->faker->randomElement([
                "http://192.168.46.36:8000/storage/posts/1649730580.png",
                "http://192.168.46.36:8000/storage/posts/1649729058.png",
                "http://192.168.46.36:8000/storage/posts/1649730461.png",
                "http://192.168.46.36:8000/storage/posts/1649730613.png",
                "http://192.168.46.36:8000/storage/posts/1649730537.png",
                "http://192.168.46.36:8000/storage/posts/1649730517.png",
                "http://192.168.46.36:8000/storage/posts/1649730461.png",
                "http://192.168.46.36:8000/storage/posts/1649730428.png",
                "http://192.168.46.36:8000/storage/posts/1649730323.png",
                "http://192.168.46.36:8000/storage/posts/1649730023.png",
                "http://192.168.46.36:8000/storage/posts/1649729250.png",
                "http://192.168.46.36:8000/storage/posts/1649729147.png",
                "http://192.168.46.36:8000/storage/posts/1649729179.png", 
                "http://192.168.46.36:8000/storage/posts/1649729058.png",
                "http://192.168.46.36:8000/storage/posts/1649730613.png",
                "http://192.168.46.36:8000/storage/posts/1649729147.png",

            ]),
            
            // 'image'=>'https://source.unsplash.com/random',
        ];
    }
}
