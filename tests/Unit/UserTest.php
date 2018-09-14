<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function homeTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/
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


    
}
