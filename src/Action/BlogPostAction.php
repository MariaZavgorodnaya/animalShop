<?php

namespace NtSchool\Action;

use Illuminate\Pagination\Paginator;
use NtSchool\Model\Post;
use Illuminate\Database\Capsule\Manager;
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


        $sidebar_posts = Post::take(3)->orderBy('id','DESC')->get();
        return $this->renderer->make('blog.blog-post',
            ['title' => 'One post',

                'sidebar_posts' => $sidebar_posts
               ]);
    }
}
