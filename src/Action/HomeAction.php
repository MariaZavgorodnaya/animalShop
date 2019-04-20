<?php

namespace NtSchool\Action;

use Monolog\Logger;
use NtSchool\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Wa72\SimpleLogger\FileLogger;

final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $logger;

    public function __construct($view, LoggerInterface $logger)
    {
        $this->renderer = $view;
        $this->logger = $logger;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $this->logger->error();
        return $this->renderer->make('pages.index', ['title' => 'Главная страница']);
    }
}
