<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        
        //Not set because its a public page
        //Auth::handleLogin();
    }
    
    public function index() {
        
        $this->view->slug = $this->model->getSlug('Home');
        
        $this->view->sticky = 'true';
        
        $this->view->title = $this->view->slug['title']; 
        $this->view->description = $this->view->slug['description'];
        $this->view->render('header');
        $this->view->render('index/index');
        //$this->view->render('login/index');
        $this->view->render('footer');
    }
    
}
