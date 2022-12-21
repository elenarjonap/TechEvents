<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Adoption;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Adoption::factory()->create([
            'name' => 'Pablito',
            'description' => 'Burrito de 6 años.',
            'spaces' => '10',
            'img' => 'https://img.freepik.com/foto-gratis/burro-cerca-cabeza-donekys_259150-57586.jpg?w=996&t=st=1671624472~exp=1671625072~hmac=56d547a8be4f7de7b60dd1eef6dfc8a7f24990b6cf8febe28dac9e2f9c6508aa',
            'datetime' => '2023-01-09 13:30:00',
        ]);

        Adoption::factory()->create([
            'name' => 'Pablito',
            'description' => 'Burrito de 6 años.',
            'spaces' => '10',
            'img' => 'https://img.freepik.com/foto-gratis/burro-cerca-cabeza-donekys_259150-57586.jpg?w=996&t=st=1671624472~exp=1671625072~hmac=56d547a8be4f7de7b60dd1eef6dfc8a7f24990b6cf8febe28dac9e2f9c6508aa',
            'datetime' => '2023-01-09 13:30:00',
        ]);

        Adoption::factory()->create([
            'name' => 'Pablito',
            'description' => 'Burrito de 6 años.',
            'spaces' => '10',
            'img' => 'https://img.freepik.com/foto-gratis/burro-cerca-cabeza-donekys_259150-57586.jpg?w=996&t=st=1671624472~exp=1671625072~hmac=56d547a8be4f7de7b60dd1eef6dfc8a7f24990b6cf8febe28dac9e2f9c6508aa',
            'datetime' => '2023-01-09 13:30:00',
        ]);

        Adoption::factory()->create([
            'name' => 'Pablito',
            'description' => 'Burrito de 6 años.',
            'spaces' => '10',
            'img' => 'https://img.freepik.com/foto-gratis/burro-cerca-cabeza-donekys_259150-57586.jpg?w=996&t=st=1671624472~exp=1671625072~hmac=56d547a8be4f7de7b60dd1eef6dfc8a7f24990b6cf8febe28dac9e2f9c6508aa',
            'datetime' => '2023-01-09 13:30:00',
        ]);

        Adoption::factory()->create([
            'name' => 'Pablito',
            'description' => 'Burrito de 6 años.',
            'spaces' => '10',
            'img' => 'https://img.freepik.com/foto-gratis/burro-cerca-cabeza-donekys_259150-57586.jpg?w=996&t=st=1671624472~exp=1671625072~hmac=56d547a8be4f7de7b60dd1eef6dfc8a7f24990b6cf8febe28dac9e2f9c6508aa',
            'datetime' => '2023-01-09 13:30:00',
        ]);

        Adoption::factory(5)->create();
    }
}
