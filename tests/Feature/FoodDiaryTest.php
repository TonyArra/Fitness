<?php

namespace Tests\Feature;

use Tests\TestCase;

//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;

class FoodDiaryTest extends TestCase
{

    public function testAddFood()
    {
        $response = $this->post(route('add-food'));
        $response->assertStatus(200);
    }

}
