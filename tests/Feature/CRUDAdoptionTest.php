<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Adoption;

class CRUDAdoptionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    public function test_listAdoptionAppearInHomeView(){
        $this->withExceptionHandling();
        $adoptions = Adoption::factory(5)->create();
        $adoption = $adoptions[0];

        $response = $this->get('/');
        $response->assertSee($adoption->name);
        $response->assertStatus(200)
                ->assertViewIs('home');
    }

    public function test_anAdoptionCanBeDeleted(){
            $this->withExceptionHandling();

            $adoption = Adoption::factory()->create();
            $this->assertCount(1, Adoption::all());

            $respone = $this->delete(route('deleteAdoption', $adoption->id));
            $this->assertCount(0, Adoption::all());
    }
}

