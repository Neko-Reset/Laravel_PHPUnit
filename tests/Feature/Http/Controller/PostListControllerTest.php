<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostListControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     *
     * @test
     */
    public function ブログ一覧が表示されること()
    {
        $response = $this->get("/");
        $response->assertStatus(200);
        $this->withoutExceptionHandling();
        $response->assertOk();
    }

}
