<?php
namespace app\controller;
// ten duong dan thu muc chua file

use app\controller\Controller;

class LoginController extends Controller
{
    // ten file va ten class phai giong nhau
    public function index()
    {
        $this->loadView('login/form_view',[
            'title' => 'Login admin website'
        ]);
    }

    public function handleLogin()
    {
        if(isset($_POST['btnLogin'])){
            echo "<pre>";
            print_r($_POST);
            print_r($_GET['age']);
        }
    }
}