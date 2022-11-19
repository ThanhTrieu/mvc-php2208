<?php
namespace app\controller;
// ten duong dan thu muc chua file

use app\controller\Controller;

class HomeController extends Controller
{
    // ten file va ten class phai giong nhau
    public function index()
    {
        // xu ly logic
        
        //load header
        $this->loadHeader([
            'tile' => 'Home page'
        ]);
        //load view 
        $this->loadView('home/index_view');
        // load footer
        $this->loadFooter();
    }
}