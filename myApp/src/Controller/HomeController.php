<?php
/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 07-10-17
 * Time: 11:48
 */
class HomeController extends Controller{
    public function index()
    {
        $this->viewBuilder()->layout('home');    }
}
