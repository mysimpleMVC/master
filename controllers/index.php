<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        $this->view->slug = $this->model->getSlug('Home');
        
        $this->view->slug = str_replace('%%URL%%', URL, $this->view->slug);
        
        $this->view->title = $this->view->slug['title']; 
        $this->view->description = $this->view->slug['description'];
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
    
}