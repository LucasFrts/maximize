<?php

namespace App\Connections\Database;

use App\Models\PostList;
use Carbon\Carbon;

class PostListConnectorDatabase
{
    public function get()
    {
        $page = request()->input('page', 1);
        $post_list = PostList::
                select('id', 'title as titulo', 'description as descricao', 'image as imagem', 'created_at as data_de_publicacao')
                ->paginate(10, ['*'], 'page', $page);
        return $post_list;
    }
}