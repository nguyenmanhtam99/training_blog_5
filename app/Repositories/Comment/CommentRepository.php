<?php

namespace App\Repositories\Comment;

use App\Repositories\BaseRepository;
use App\Models\Comment;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }

    public function showComment($id)
    {
        $comments = $this->model->with('user')->where('entry_id', $id)->get();
        return $comments;
    }
}
