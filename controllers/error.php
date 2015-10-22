<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
        header('HTTP/1.0 404 Not Found', true, 404);
    }
    
    function index() {
        $this->view->title = '404 Error';
        $this->view->sticky = 'true';
        $this->view->msg = 'This page doesnt exist';
        
        $this->view->render('header');
        $this->view->render('error/index');
        $this->view->render('footer');
    }

}