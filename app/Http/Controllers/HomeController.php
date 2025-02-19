<?php

namespace Http\Controllers;

use Core\Database;


class HomeController
{

    public function __construct(private Database $db) {}

    public function index()
    {



        $result =  $this->db->query("Select * from users ")->findAll();

        echo twig()->render('index.twig', ['greet' => 'Hell wrold']);
    }

    public function about()
    {
        echo 'this is about page';
    }
}
