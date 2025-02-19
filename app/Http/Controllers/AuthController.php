<?php

namespace Http\Controllers;

use Core\Session;
use Core\ValidationException;
use Http\Services\AuthService;
use Valitron\Validator;

class AuthController
{


    public function __construct(private AuthService $authService) {}


    public function showRegisterPage()
    {


        echo twig()->render('auth/register.twig', ['errors' => Session::get('errors'), 'old' => Session::get('old')]);
    }

    public function register()
    {


        $v = new Validator($_POST);
        $v->rule('required', ['name', 'email', 'password', 'confirmPassword']);
        $v->rule('email', 'email');
        $v->rule('equals', 'confirmPassword', 'password');
        $v->rule(
            'lengthMin',
            'password',
            8
        );


        if (! $v->validate()) {
            throw new ValidationException($v->errors(), $v->data());
        }


        $result =  $this->authService->saveUser($_POST);

        if ($result) {
            redirect('/');
        }


        abort();
    }
}
