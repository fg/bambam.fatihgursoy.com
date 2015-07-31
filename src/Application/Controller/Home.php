<?php namespace Application\Controller;

use Bambam\Base\Controller;

class Home extends Controller
{
    public function indexAction()
    {
        $this->render('home/index.twig');
    }
}