<?php


namespace App\Controllers;
use \Core\View;

class AdministrationStaff extends \Core\Controller
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

    public function managebookingsAction()
    {
        View::renderTemplate('AdministrationStaff/manage-booking.html');
    }

    public function managefacilityAction()
    {
       View::renderTemplate('AdministrationStaff/manage-facility.html');

    }

    public function managetimeslotsAction()
    {
        View::renderTemplate('AdministrationStaff/manage-booking.html');

    }

    public function notificationAction()
    {
        View::renderTemplate('AdministrationStaff/manage-booking.html');

    }


}