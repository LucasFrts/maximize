<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Connections\Database\PostConnectorDatabase;
use App\Connections\Database\PostListConnectorDatabase;
use App\Models\Posts;
use App\Models\PostList;
use Illuminate\Http\Request;
use App\Helpers\ResponseHelper;
use Exception;


class PostController extends Controller
{   
    /**
    * @OA\Get(
    *     path="/api/v1/posts",
    *     summary="Retorna posts",
    *     description="Retorna uma lista de posts.",
    *     tags={"Posts"},
    *     @OA\Response(
    *         response=200,
    *         description="Posts retornados com sucesso",
    *         @OA\JsonContent(
    *             @OA\Property(property="success", type="boolean", example=true),
    *             @OA\Property(property="message", type="string", example="Posts returned successfully"),
    *             @OA\Property(
    *                 property="data",
    *                 type="array",
    *                 @OA\Items(
    *                     type="object",
    *                     @OA\Property(property="id", type="integer", example=1),
    *                     @OA\Property(property="titulo", type="string", example="Nova unidade Simetra"),
    *                     @OA\Property(property="descricao", type="string", example="Para sua comodidade nós inauguramos mais uma unidade..."),
    *                     @OA\Property(property="imagem", type="string", example="images/thumb_1.png"),
    *                     @OA\Property(property="data_de_publicacao", type="string", example="2024-03-03 16:34:53"),
    *                 )
    *             ),
    *             @OA\Property(property="current_page", type="integer", example=1),
    *             @OA\Property(property="last_page", type="integer", example=1),
    *             @OA\Property(property="next_page_url", type="string", example=null),
    *             @OA\Property(property="prev_page_url", type="string", example=null),
    *             @OA\Property(property="last_page_url", type="string", example="http://localhost:8000/api/v1/posts?page=1"),
    *             @OA\Property(property="first_page_url", type="string", example="http://localhost:8000/api/v1/posts?page=1"),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=500,
    *         description="Erro interno do servidor",
    *         @OA\JsonContent(
    *             @OA\Property(property="success", type="boolean", example=false),
    *             @OA\Property(property="message", type="string", example="Erro interno do servidor"),
    *             @OA\Property(property="error", type="object", example={}),
    *         ),
    *     ),
    * )
    */
    public function get(PostListConnectorDatabase $posts_connector)
    {
        try{
            $post_list = $posts_connector->get();
            return ResponseHelper::success('Posts returned successfully', $post_list);
        }
        catch(Exception $e)
        {
            return ResponseHelper::error($e->getMessage(), $e);
        }
    }
    /**
    * @OA\Get(
    *     path="/api/v1/post/{id}",
    *     summary="Retorna posts",
    *     description="Retorna um post específico.",
    *     tags={"Posts"},
    *     @OA\Parameter(
    *         name="id",
    *         in="path",
    *         required=true,
    *         description="ID do post",
    *         @OA\Schema(type="integer", format="int64"),
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Post retornado com sucesso",
    *         @OA\JsonContent(
    *             @OA\Property(property="success", type="boolean", example=true),
    *             @OA\Property(property="message", type="string", example="Post returned successfully"),
    *             @OA\Property(
    *                 property="data",
    *                 type="object",
    *                 @OA\Property(property="titulo", type="string", example="Nova unidade Simetra"),
    *                 @OA\Property(property="descricao", type="string", example="Para sua comodidade nós inauguramos mais uma unidade..."),
    *                 @OA\Property(property="imagem", type="string", example="images/banner_1.png"),
    *                 @OA\Property(property="texto_completo", type="string", example="<p>O laboratório Simetra traz mais uma novidade para sua clínica...</p>"),
    *                 @OA\Property(property="data_de_publicacao", type="string", format="date", example="2024-03-01"),
    *             )
    *         ),
    *     ),
    *     @OA\Response(
    *         response=500,
    *         description="Erro interno do servidor",
    *         @OA\JsonContent(
    *             @OA\Property(property="success", type="boolean", example=false),
    *             @OA\Property(property="message", type="string", example="Erro interno do servidor"),
    *             @OA\Property(property="error", type="object", example={}),
    *         ),
    *     ),
    * )
    */
    public function getById($id, PostConnectorDatabase $post_connector)
    {
        try{
            $post = $post_connector->getById($id);
            return ResponseHelper::success('Post returned successfully', $post);
        }
        catch(ModelNotFoundException $e){
            return ResponseHelper::error('Post not found', $e, 404);
        }
        catch(Exception $e)
        {
            return ResponseHelper::error($e->getMessage(), $e);
        }
    }
}
