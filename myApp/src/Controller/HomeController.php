<?php
/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 07-10-17
 * Time: 11:48
 */
namespace App\Controller;

class HomeController extends AppController{
    public function index()
    {
        $this->render('/pages/home');
    }
}
