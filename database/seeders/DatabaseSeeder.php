<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Adoption;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Martina',
            'description' => 'Burrito de 6 años.',
            'spaces' => '10',
            'img' => 'https://img.freepik.com/foto-gratis/adorables-lechones-granja_23-2149066177.jpg?w=740&t=st=1671713541~exp=1671714141~hmac=c9ba9509186fe1f344b4ebe2625ddf26e93e616f6810751d05fc793e338831c4',
            'datetime' => '2023-01-09 13:30:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Araceli',
            'description' => 'Burrito de 6 años.',
            'spaces' => '10',
            'img' => 'https://img.freepik.com/foto-gratis/gato-rojo-o-blanco-i-estudio-blanco_155003-13189.jpg?w=740&t=st=1671713568~exp=1671714168~hmac=89f545f2fe19cafead8737344857482646eff4e70ba692f4bac62839e2cf3101',
            'datetime' => '2023-01-09 13:30:00',
        ]);

        Adoption::factory()->create([
            'name' => 'Manila',
            'description' => 'Gata, 6 años. Manila es una gata muy cariñosa y especial, es independiente de los demás gatos del refugio pero con las personas es muy mimosa. Ella fue rescatada de una colonia callejera y desde entonces vive en nuestro refugio. Es una gata adorable y su pelito es como de algodón, corto y denso.',
            'spaces' => '14',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673353332/gato.jpg',
            'datetime' => '2023-03-15 12:30:00',
        ]);
        Adoption::factory(6)->create();

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);

        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);

        /* User::factory(5)->create(); */
    }
}