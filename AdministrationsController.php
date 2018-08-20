<?php

namespace App\Controllers;
use App\Core\Controller;

class AdministrationsController extends Controller
{
    
    
    public function indexAction ()
    {
//        $result = $this->model->admins();
//        $vars = [
//            'admins' => $result,
//        ];
        $this->view->render('Администрации');
//        $this->view->render('Администрации', $vars);
        
        
        
    }
    
}
