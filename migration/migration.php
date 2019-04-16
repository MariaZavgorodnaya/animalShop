<?php
require_once '../vendor/autoload.php';
require_once '../config/dotenv.php';
require_once '../config/database.php';


/*Illuminate\Database\Capsule\Manager::schema()->create('posts', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->text('content');

    $table->string('description');
    $table->string('cover');
    $table->timestamps();
});
Illuminate\Database\Capsule\Manager::schema()->create('categories', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('key');
    $table->timestamps();
});
Illuminate\Database\Capsule\Manager::schema()->create('category_post', function ($table) {

    $table->integer('post_id');
    $table->integer('category_id');
    $table->timestamps();
    $table->primary(['post_id', 'category_id']);
});*/
$post = new \NtSchool\Model\Post();
$post->title = 'Title';
$post->content = 'content';
$post->description = 'desc';
$post->cover = 'cover';
$post->save();