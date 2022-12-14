<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Adoption;
use App\Models\User;

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

            $userNoAdmin = User::factory()->create(['isAdmin' => false]);
            $this->actingAs($userNoAdmin);
            $respone = $this->delete(route('deleteAdoption', $adoption->id));
            $this->assertCount(1, Adoption::all());

            $userAdmin = User::factory()->create(['isAdmin' => true]);
            $this->actingAs($userAdmin);
            $respone = $this->delete(route('deleteAdoption', $adoption->id));
            $this->assertCount(0, Adoption::all());
    }
    public function test_anAdoptionCanBeCreated(){
            $this->withExceptionHandling();

            $userAdmin = User::factory()->create(['isAdmin' => true]);
            $this->actingAs($userAdmin);

            $response = $this->post((route('storeAdoption')),
            [
                'name' => 'name',
                'description' => 'description',
                'spaces' => '80',
                'img' => 'img',
                'datetime' => '2022/12/24 18:00:00'
            ]);
            $this->assertCount(1, Adoption::all());

            $userNoAdmin = User::factory()->create(['isAdmin' => false]);
            $this->actingAs($userNoAdmin);
            
            $response = $this->post((route('storeAdoption')),
            [
                'name' => 'name',
                'description' => 'description',
                'spaces' => '80',
                'img' => 'img',
                'datetime' => '2022/12/24 18:00:00'
            ]);
            $this->assertCount(1, Adoption::all());
    }
    public function test_anAdoptionCanBeUpdated(){
        $this->withExceptionHandling();
        $adoption = Adoption::factory()->create();
        $this->assertCount(1, Adoption::all());

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);
        $response = $this->patch(route('updateAdoption', $adoption->id), ['name' => 'New Name']);
        $this->assertEquals('New Name', Adoption::first()->name);

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);
        $response = $this->patch(route('updateAdoption', $adoption->id), ['name' => 'New Name if not Admin']);
        $this->assertEquals('New Name', Adoption::first()->name);
    }
    public function test_anAdoptionCanBeShowed(){
        $this->withExceptionHandling();
        $adoption = Adoption::factory()->create();
        $this->assertCount(1, Adoption::all());
        $response = $this->get(route('showAdoption', $adoption->id));
        $response->assertSee($adoption->name);
        $response->assertStatus(200)->assertViewIs('showAdoption');
    }
}