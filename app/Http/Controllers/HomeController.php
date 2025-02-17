<?php

namespace Http\Controllers;

use Core\Database;
use Http\Services\Test;

class HomeController
{



    public function __construct(private Test $test, private Database $db) { }

    public function index()
    {

        $result = $this->db->query('SELECT * FROM customers')->findAll();

        dd($result);
    }

    public function about()
    {
        echo 'this is about page';
    }
}
