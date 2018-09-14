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
    public function testExample()
    {
        Event::fake();

        $request = Request::create('/store', 'POST',[

            'name'     =>     'foo',
    
            'email'     =>     'bar',
            'profile'     =>     'index.png',
            'password'     =>     bcrypt('Password12'),
            
    
        ]);

        $controller = new UserController();

        $response = $controller->store($request);
        $this->assertEquals(302, $response->getStatusCode());

        $document = Document::where('title', 'foo')->first();

        $this->assertNotNull($document);

        Event::assertDispatched(DocumentCreated::class, function ($event) use ($document) { 

            return $event->document->id === $document->id; 
    
        });
    }

    /*
    public function testExample()
    {
        $user = new User(['id'=>'1']);
        $this->assertEquals('1', $user->id);
    }*/

    
}
