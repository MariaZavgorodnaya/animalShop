<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;

final class AdminSignInAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $params = $request->getMethod();
        if($params === 'POST'){

        }
        return $this->renderer->make('admin.admin-signIn', ['title' => 'Sign in']);
    }
}
