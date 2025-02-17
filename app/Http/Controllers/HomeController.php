<?php

namespace Http\Controllers;

use Http\Services\Test;

class HomeController
{

    public function __construct(private Test $test) {}

    public function index()
    {

        $this->test->greet();
    }

    public function about()
    {
        echo 'this is about page';
    }
}
