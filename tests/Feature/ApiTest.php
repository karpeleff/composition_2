<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_1()
    {
        $response = $this->get('/api/v1/document/');

        $response->assertStatus(200);
    }

    public function test_2()
    {

       // $this->json('POST', '/api/v1/document/', ['status' => 'draft','payload' => 'string'])


             $response = $this->json('POST', '/api/v1/document', ['status' => 'draft','payload' => 'string']);

        $response
            ->assertStatus(201)
            ->assertJson([
                'status' => 'draft',
            ]);
    }

    public function  test_3()
    {
        $response = $this->json('DELETE','/api/v1/document/4');

        $response
            ->assertStatus(203);

    }


}
