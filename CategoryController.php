<?php

namespace App\Controllers;
use App\Core\Controller;

class CategoryController extends Controller
{
    public function indexAction ()
    {
     
        
//        $getall = $this->model->getAll();
//        $vars = [
//            'get_all' => $getall,
//        ];
//        $this->view->render('По категориям', $vars);
        $this->view->render('По категориям');
    }
}