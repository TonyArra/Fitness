<?php

namespace App;

class Food extends \Eloquent
{
    protected $fillable = ['name', 'calories', 'protein', 'fat', 'carbs'];
}
