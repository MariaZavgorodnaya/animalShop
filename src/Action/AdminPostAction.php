<?php

namespace NtSchool\Action;

use NtSchool\Model\Category;
use NtSchool\Model\Category_post;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

final class AdminPostAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        //$slug = $request->getAttribute('slug');
        $name = $_GET['title'] ?? '';
        $desc = $_GET['description'] ?? '';
        $content = $_GET['content'] ?? '';
        $cover = $_GET['media'] ?? '';
        $category_title = $_GET['category'] ?? '';
        $category_slug = $_GET['category-slug'] ?? '';



        $posts = new Post;
        $posts->title = $name;
        $posts->content = $content;
        $posts->description = $desc;
        $posts->cover = $cover;
        $posts->saveOrFail();

        $categories = new Category();
        $categories->title = $category_title;
        $categories->key = $category_slug;
        $categories->save();

        /*$category_post = new Category_post();
        $category_post->post_id = $posts->id;
        $category_post->category_id = $categories->id;
        $category_post->save();*/


        return $this->renderer->make('admin.admin-post',
            ['title' => 'Post',
                'name' => $name,
                'desc' => $desc,
                'content' => $content]);
    }
}
