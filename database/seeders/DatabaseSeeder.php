<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Adoption;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{  
    public function run()
    {
        Adoption::factory()->create([
            'name' => 'Pablito',
            'description' => 'Burrito de 1 año. Pablito Es un burrito observador, pacífico, aunque, a veces, no lo parece porque sus movimientos son un poco bruscos, pero todo es por culpa del miedo que aún tiene.
            La primera vez que lo vimos estaba en una especie de garaje con un suelo lleno de estiércol y purines que le llegaban a la barriga. Llevaba meses sin apenas comer. 
            Simplemente no entendemos cómo los humanos nos creemos con derecho a tratar a otros de esta manera…',
            'spaces' => '19',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673514091/LasNotas/burritos_c7320x.jpg',
            'datetime' => '2023-01-25 13:30:00',
        ]);        
        Adoption::factory()->create([
            'name' => 'Matilde',
            'description' => 'Cerdita de 4 meses. Curiosa y cariñosa. Le encanta el contacto con personas y que le cepillen. Lo que más le gusta son los baños de barro. Te puede sorprender lo buena compañera es.',
            'spaces' => '10',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673514749/LasNotas/Cerdito.webp',
            'datetime' => '2023-02-17 18:30:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Piki',
            'description' => 'Ninfa de 2 años. Piki es un chico muy divertido y le encanta las buenas conversaciones. El juego para él es muy importante. Tiene un problema en el pico, la parte de arriba le crece más que la de abajo, por lo tanto hay que limárselo para que pueda comer. Un gran amigo para la familia.',
            'spaces' => '12',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673608773/LasNotas/ninfa_ji7ma6.png',
            'datetime' => '2023-02-22 19:00:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Manila',
            'description' => 'Gata, 3 meses. Manila es una gata muy cariñosa y especial, es independiente de los demás gatos del refugio pero con las personas es muy mimosa. Ella fue rescatada de una colonia callejera y desde entonces vive en nuestro refugio. Es una gata adorable y su pelito es como de algodón, corto y denso.',
            'spaces' => '24',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673608424/LasNotas/gato_1.png',
            'datetime' => '2023-03-15 12:30:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Turquino',
            'description' => 'Siendo apenas un cachorro, Turquino fue encadenado. Todavía tenía que crecer, pero nadie tuvo eso en cuenta, y nunca le quitaron esa cadena. Con el tiempo, su cuello se hizo más grande y dado que la cadena no podía ceder, se le fue incrustando poco a poco. Le liberamos de esa cadena y ya sus heridas fueron sanando. Él quiere correr y jugar. Siempre había anhelado libertad y cariño. Turquino ya está genial, enérgico y juguetón.',
            'spaces' => '9',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673604210/LasNotas/firulais.png',
            'datetime' => '2023-03-16 17:45:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Las Pepas',
            'description' => 'Damos en adopción esta familia de ratitas porque necesitan vivir en compañía de su propia especie. Sólo se pueden acoger hermanitos/as del mismo sexo, para evitar que se reproduzcan. Cariñosas y divertidas.',
            'spaces' => '14',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673609122/LasNotas/ratas_ymwvwo.png',
            'datetime' => '2023-03-16 19:45:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Pumi',
            'description' => 'Conejo de 1 año. Pumi es un conejito que lo tuvo una familia desde pequeño. Al hacerse mayor vieron que era demasiado trabajo para ellos la limpieza del patio y lo metieron en una jaula. Al tiempo les dio pena y decidieron darlo a otra persona que tuviera más tiempo y sensibilidad para estar con él. ¿Eres Tú? Por cierto, Pumi le encanta el calor y si lo subes a tu regazo se quedará dormido.',
            'spaces' => '11',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673607054/LasNotas/conejo_1_xcghm2.png',
            'datetime' => '2023-03-20 18:25:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Flora',
            'description' => 'Gallina de 6 meses. Flora tuvo un altercado con un perro y tiene un ala rota. Necesita estar en compañía con otras gallinas. Esta acostumbrada a las personas y le gusta seguirte cuando llega la hora de la comida, también le gusta que le acaricies el cuello. Pone unos huevos exquisitos.',
            'spaces' => '20',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673608110/LasNotas/gallina_f4w33l.png',
            'datetime' => '2023-03-21 17:00:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Amis',
            'description' => 'Coballa de 5 meses. Amis es hijo de Star. Tuvo la suerte de nacer en una de nuestras casas de acogida y no en el polígono donde recogimos a la madre y donde posiblemente no hubiese sobrevivido.
            Es un poco miedoso, por eso necesita alguien que le dedique tiempo para que vaya tomando confianza. Amis no se da en adopción para vivir solo. Debe convivir al menos con otro cobaya',
            'spaces' => '10',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673871169/LasNotas/cobaya_jw9fdf.png',
            'datetime' => '2023-03-24 16:00:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Mónica',
            'description' => 'Vaca de 6 meses. Mónica fue rescata de una terrible situación de maltrato.
            Ella permanecía junto a otras vacas y terneros en una explotación de Boiro, Galicia que fue denunciada porque los animales estaban famélicos y atados a cortas cadenas que les impedía moverse. Ahora es una vaca muy simpática, que siempre se acerca a saludar y a la que le encanta comer, pastar junto a su familia bovina y tomar el sol. Todo aquello que durante años no pudo disfrutar.',
            'spaces' => '20',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673876610/LasNotas/vaqui_slqzku.png',
            'datetime' => '2023-03-24 17:00:00',
        ]);        
        Adoption::factory()->create([
            'name' => 'Coti y Kote',
            'description' => 'Cotorras argentinas de 3 años. Coti y Kote son dos Cotorras Argentinas. Cuando llega la poda de las palmeras cantidades inmensas de nidos caen y estas aves fallecen en el proceso, Estos dos han sido recogidos por unas amigas y son papilleras alimentadas por la asociación. Al ser papilleras tendrán afinidad con las personas que los adopten.',
            'spaces' => '15',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673872033/LasNotas/cotorras.png',
            'datetime' => '2023-03-25 19:45:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Galleta',
            'description' => 'Cabra de 4 meses. La encontraron con pocos días de vida sola y la han estado cuidando con mucho amor hasta que ha podido venir con nosotras, Está deseando encontrar una súper familia de cabras y personas!',
            'spaces' => '12',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673877853/LasNotas/cabri_yao01b.png',
            'datetime' => '2023-03-26 17:00:00',
        ]);
        Adoption::factory()->create([
            'name' => 'Coti y Kote2',
            'description' => 'Cotorras argentinas de 1 mes. Coti y Kote son dos Cotorras Argentinas. Cuando llega la poda de las palmeras cantidades inmensas de nidos caen y estas aves fallecen en el proceso, Estos dos han sido recogidos por unas amigas y son papilleras alimentadas por la Asociación. Al ser papilleras tendrán afinidad con las personas que los adopten.',
            'spaces' => '8',
            'img' => 'https://res.cloudinary.com/dog5ljnve/image/upload/v1673872033/LasNotas/cotorras.png',
            'datetime' => '2023-03-26 19:45:00',
        ]);

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);

        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);

        User::factory()->create(['name' => 'user2', 'email' => 'user2@user2.com', 'isAdmin' => false]);

        User::factory()->create(['name' => 'user3', 'email' => 'user3@user3.com', 'isAdmin' => false]);

    }
}