<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * Exemple de test fonctionnel de l'API
     *
     * @return void
     */
    public function test_making_an_api_request()
        {
            $response = $this->postJson('/api/article',
            ['title' => 'API TEST',
            'content' => 'Ceci est un test api'
        ]);

            $response
                ->assertStatus(200)
                ->assertJson([
                    'success' => false,
                ]);
        }
    }

