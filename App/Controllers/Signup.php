<?php


namespace App\Controllers;
use \Core\View;

class Signup extends \Core\Controller
{
    protected function before()
    {

    }

    public function after()
    {
    }

    public function indexAction()
    {
        View::renderTemplate('Home/visitor.html');
    }

}