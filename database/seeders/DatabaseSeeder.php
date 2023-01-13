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
            'description' => 'Burrito de 6 años. Pablito Es un burrito observador, pacífico, aunque, a veces, no lo parece porque sus movimientos son un poco bruscos, pero todo es por culpa del miedo que aún tiene.
            La primera vez que la vimos estaba en una especie de garaje con un suelo lleno de estiércol y purines que le llegaban a la barriga. llevaban meses sin apenas comer.
            Simplemente no entendemos cómo los humanos nos creemos con derecho a tratar a otros de esta manera…',
            'spaces' => '19',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673514091/LasNotas/burritos_c7320x.jpg',
            'datetime' => '2023-01-25 13:30:00',
        ]);        
        Adoption::factory()->create([
            'name' => 'Matilde',
            'description' => 'Cerdita de 4 meses. Curiosa y cariñosa. Le encanta el contacto con personas y que le cepillen. Lo que más le gusta son los baños de barro. Te puede sorprender que buena compañera es.',
            'spaces' => '10',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673514749/LasNotas/Cerdito.webp',
            'datetime' => '2023-02-17 18:30:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Piki',
            'description' => 'Ninfa de 2 años. Piki es un chico muy divertido y le encanta las buenas conversaciones. El juego para él es muy importante. Tiene un problema en el pico, la parte de arriba le crece más que la de abajo, por lo tanto hay que limárselo para que pueda comer. Un gran amigo para la familia.',
            'spaces' => '12',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673516395/LasNotas/ninfa_ezh6ov.png',
            'datetime' => '2023-02-22 19:00:00',
        ]);

        Adoption::factory()->create([
            'name' => 'Manila',
            'description' => 'Gata, 6 años. Manila es una gata muy cariñosa y especial, es independiente de los demás gatos del refugio pero con las personas es muy mimosa. Ella fue rescatada de una colonia callejera y desde entonces vive en nuestro refugio. Es una gata adorable y su pelito es como de algodón, corto y denso.',
            'spaces' => '24',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673353332/gato.jpg',
            'datetime' => '2023-03-15 12:30:00',
        ]);

        Adoption::factory()->create([
            'name' => 'Turquino',
            'description' => 'Turquino Siendo a penas un cachorro, Turquino fue encadenado. Todavía tenía que crecer, pero nadie tuvo eso en cuenta, y nunca le quitaron esa cadena. Con el tiempo, su cuello se hizo más grande, y dado que la cadena no podía ceder, se le fue incrustando poco a poco. Le liberamos de esa cadena y ya sus heridas fueron sanando. Él quiere correr y jugar. Siempre había querido libertad y cariño. Turquino ya está genial, enérgico y juguetón.',
            'spaces' => '9',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673604210/LasNotas/firulais.png',
            'datetime' => '2023-03-16 17:45:00',
        ]);

        Adoption::factory()->create([
            'name' => 'Las Pepas',
            'description' => 'Damos en adopción esta familia de ratitas porque necesitan vivir en compañía de su propia especie. Sólo damos en adopción hermanitos/as del mismo sexo, para evitar que se reproduzcan. Cariñosas y divertidas estos chicos.',
            'spaces' => '14',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673516921/LasNotas/Ratas.jpg',
            'datetime' => '2023-03-16 19:45:00',
        ]);
        
        /* Adoption::factory(6)->create(); */

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);

        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);

        /* User::factory(5)->create(); */
    }
}