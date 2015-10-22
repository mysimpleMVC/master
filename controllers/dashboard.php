<?php

class Dashboard extends Controller {

    function __construct() {
        
        Auth::handleLoginAndPermissions();
        parent::__construct();
        
        $this->view->js = array('dashboard/js/default.js');
    }
    
    function rolesError() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
        $this->view->title = 'Permissions problem';
        $this->view->h1 = 'Permissions problem';
        
        $this->view->message = 'You dont have permission to access the page you requested';

        $this->view->render('header');
        $this->view->render('dashboard/roles');
        
        $this->view->sticky = 'true';
        $this->view->render('dashboard/inc/footer');
    }

    function index() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
        $this->view->title = 'Dashboard';
        $this->view->h1 = 'Dashboard';

        $this->view->render('header');
        $this->view->render('dashboard/index');

        $this->view->sticky = 'true';
        $this->view->render('dashboard/inc/footer');
    }

    function logout() {
        Session::destroy();
        header('location: ' . URL . 'login');
        exit;
    }

    function xhrInsert() {
        
        $this->model->xhrInsert();
    }

    function xhrGetListings() {
        $this->model->xhrGetListings();
    }

    function xhrDeleteListing() {
        $this->model->xhrDeleteListing();
    }

    function getSponsorNameById($id) {

        return $this->model->leanerSponsor($id);
    }

}
