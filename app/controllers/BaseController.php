<?php

namespace app\controllers;

use flight\Engine;

abstract class BaseController {
    protected Engine $app;

    public function __construct(Engine $app)
    {
        $this->app = $app;
    }

    public function __call(string $name, array $arguments)
    {
        return $this->app->$name(...$arguments);
    }
}