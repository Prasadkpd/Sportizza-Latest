<?php


namespace App\Controllers;


use Core\View;

class Admin extends \Core\Controller
{
    protected function before()
    {

    }

    public function after()
    {
    }

    public function faqAction()
    {
        View::renderTemplate('Admin/admin-FAQ.html');
    }

    public function manageuserAction()
    {
        View::renderTemplate('Admin/admin-manage-users.html');
    }

    public function ratingsAction()
    {
        View::renderTemplate('Admin/admin-ratings.html');
    }

}