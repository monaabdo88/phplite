<?php 
namespace App\Controllers;
class HomeController{
    /**
     * Show home Page
     * @return Phplite\View\View
     */
    public function index()
    {
        $title = "Home Page";
        return view('web.home.index',['title'=> $title]);
    }
}