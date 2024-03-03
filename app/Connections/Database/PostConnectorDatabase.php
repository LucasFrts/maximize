<?php

namespace App\Connections\Database;

use App\Models\Posts;
use Carbon\Carbon;

class PostConnectorDatabase
{
    public function getById($id)
    {
        $post = Posts::select('parent_header', 'full_text as texto_completo', 'created_at as data_de_publicacao','banner as imagem')->with('postList')->findOrFail($id);
        $post_list = $post->postList;
        $post->titulo = $post_list->title;
        $post->descricao = $post_list->description;
        $post->data_de_publicacao = Carbon::createFromTimeString($post->data_de_publicacao)->format('Y-m-d');
        return $post->only(['titulo', 'descricao','imagem', 'texto_completo', 'data_de_publicacao']);
    }
}