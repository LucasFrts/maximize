<?php

namespace App\Connections\Database;

use App\Models\PostList;
use Carbon\Carbon;

class PostListConnectorDatabase
{
    public function get()
    {
        $post_list = PostList::select('id', 'title as titulo', 'description as descricao', 'image as imagem', 'created_at as data_de_publicacao')->get();
        return $post_list->map(function($post){
            $post->data_de_publicacao = Carbon::createFromTimeString($post->data_de_publicacao)->format('Y-m-d');
            return $post;
        });
    }
}