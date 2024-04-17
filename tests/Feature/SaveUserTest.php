<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class SaveUserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test store user endpoint.
     *
     * @return void
     */
    public function testStoreUser()
    {
        $userData = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'additional_information' => 'test additional infos',
        ];

        $response = $this->post('users/create', $userData);
        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseHas('users', [
            'first_name' => $userData['first_name'],
            'last_name' => $userData['last_name'],
            'email' => $userData['email'],
            'additional_information' => $userData['additional_information'] ?? null,
        ]);
    }
}
