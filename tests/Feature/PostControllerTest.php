<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    public function test_get_post_list(): void
    {
        $response = $this->json('GET', '/api/v1/posts');

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'message' => 'Posts returned successfully',
            ])
            ->assertJsonStructure([
                'success',
                'message',
                'data' => [
                    '*' => [
                        'id',
                        'titulo',
                        'descricao',
                        'imagem',
                        'data_de_publicacao'
                    ],
                ],
            ]);
    }

    public function test_get_post()
    {
        // Assumindo que você tem um post de exemplo com ID 1 no seu banco de dados
        $postId = 1;

        $response = $this->json('GET', "/api/v1/post/$postId");

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'message' => 'Post returned successfully',
            ])
            ->assertJsonStructure([
                'success',
                'message',
                'data' => [
                    'titulo',
                    'descricao',
                    'imagem',
                    'texto_completo',
                    'data_de_publicacao',
                ],
            ]);
    }

    public function test_get_post_not_found()
    {
        // Assumindo que você tem um ID que não existe no seu banco de dados
        $nonExistentPostId = 999;

        $response = $this->json('GET', "/api/v1/post/{$nonExistentPostId}");

        $response->assertStatus(404)
            ->assertJson([
                'success' => false,
                'message' => 'Post not found',
            ]);
    }
}
