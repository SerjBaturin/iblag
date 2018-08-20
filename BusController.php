<?php

namespace App\Controllers;
use App\Core\Controller;

class BusController extends Controller
{
    public function indexAction ()
    {
        $this->view->render('Автобусы');
    }
}

