<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Food;

class FoodDiaryTest extends TestCase
{
    use DatabaseTransactions;

    private $data = array();

    public function testCanAddFood()
    {
        $response = $this->post(route('add-food'), $this->data);
        $response->assertRedirect(route('home'));
    }

    public function testCanReadFoods()
    {
        Food::create($this->data);
        $response = $this->get(route('read-food'));
        $response->assertStatus(200)
            ->assertJsonFragment($this->data)
            ->assertJsonStructure(array('count', 'records'));
    }

    public function testHomeHasFoods()
    {
        $response = $this->get(route('home'));
        $response->assertViewHas('foods');
    }

    public function setUp()
    {
        parent::setUp();

        $this->data = array(
            'calories' => 100,
            'name' => 'Nabisco 100-Calorie Snack Pak',
            'protein' => 5,
            'fat' => 2,
            'carbs' => 15
        );
    }

}
