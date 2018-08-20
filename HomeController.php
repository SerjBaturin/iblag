<?php

namespace App\Controllers;
use App\Core\Controller;

class HomeController extends Controller
{
    
    
    public function indexAction ()
    {
        
        $ban = $this->model->getBanner();
        $vars = [
            'getbanner' => $ban,
        ];
        $this->view->render('iBlag', $vars);
        
        
        
    }
    
}