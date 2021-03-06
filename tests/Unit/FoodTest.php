<?php

namespace Tests\Unit;

use App\Food;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FoodTest extends TestCase
{
    use DatabaseTransactions;

    public function testCanCreateFood()
    {
        $data = array(
            'calories' => 100,
            'name' => 'Nabisco 100-Calorie Snack Pak',
            'protein' => 5,
            'fat' => 2,
            'carbs' => 15
        );
        
        Food::create($data);

        $this->assertDatabaseHas('foods', $data);
    }

}
