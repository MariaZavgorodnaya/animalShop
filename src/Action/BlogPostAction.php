<?php

namespace NtSchool\Action;

use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

final class BlogPostAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {

        return $this->renderer->make('blog.blog-post',
            ['title' => 'One post',
               ]);
    }
}
