<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHasItemInBox()
    {
        $user = new User;


    }

    /*
    public function testExample()
    {
        $user = new User(['id'=>'1']);
        $this->assertEquals('1', $user->id);
    }*/

    
}
