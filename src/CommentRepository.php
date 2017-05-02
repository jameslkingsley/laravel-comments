<?php

namespace Kingsley\Comments;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class CommentRepository
{
    protected $model;
    protected $comment;

    /**
     * Constructor method.
     *
     * @return any
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->comment = new Comment;
    }

    /**
     * Gets all mentions for this model.
     *
     * @return any
     */
    public function get()
    {
        //
    }

    /**
     * Creates a mention record.
     *
     * @return any
     */
    public function create(Model $recipient, $notify = true)
    {
        //
    }

    /**
     * Destroys all mentions for the given model.
     *
     * @return any
     */
    public function destroy(Model $model)
    {
        //
    }
}
