<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = array('dashboard/js/default.js');
    }

    function index() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
        $this->view->title = 'Dashboard';
        $this->view->h1 = 'Dashboard';

        $this->view->render('header');
        $this->view->render('dashboard/index');

        $this->view->sticky = 'true';
        $this->view->render('footer');
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
