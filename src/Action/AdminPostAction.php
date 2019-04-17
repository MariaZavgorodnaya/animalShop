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

        //$name = $request->getAttribute('title') ?? '';
       // $desc = $request->getAttribute('desc') ?? '';
        //$content = $request->getAttribute('content') ?? '';
        //$category_title = $request->getAttribute('category') ?? '';
        //$category_slug = $request->getAttribute('category-slug') ?? '';
        //$cover = 'cover';

        var_dump($request->getMethod());
if($request->getMethod() == 'POST') {
    $name = $request->getUploadedFiles()->$_FILES['title'];
    $content = $request->getUploadedFiles()->$_FILES['content'];
    $desc = $request->getUploadedFiles()->$_FILES['desc'];
    $cat = $request->getUploadedFiles()->$_FILES['category'];
    $cat_slug = $request->getUploadedFiles()->$_FILES['category_slug'];

    var_dump($request->getUploadedFiles());
    $posts = new Post;
    $posts->title = $name;
    $posts->content = $content;
    $posts->description = $desc;
    $posts->cover = 'cover';
    $posts->saveOrFail();

    $categories = new Category();
    $categories->title = $cat;
    $categories->key = $cat_slug;
    $categories->save();
}
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