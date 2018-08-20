<?php

namespace App\Controllers;
use App\Core\Controller;

class AlphabetController extends Controller
{
    
    
    public function indexAction ()
    {
//        $result = $this->model->getOrgs();
//        $vars = [
//            'orgs' => $result,
//        ];
        $this->view->render('По алфавиту');
//        $this->view->render('По алфавиту', $vars);
        
        
        
    }
    
}

