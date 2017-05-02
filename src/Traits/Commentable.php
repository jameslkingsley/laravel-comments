<?php

namespace Kingsley\Comments\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

trait Commentable
{
    protected $commentRepository;

    /**
     * Constructor method.
     *
     * @return any
     */
    public function __construct()
    {
        $this->commentRepository = new CommentRepository($this);
    }
}
