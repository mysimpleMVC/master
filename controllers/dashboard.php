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

    function learners($param1 = null, $param2 = null) {

        $list = '';
        $list_delete = '';

        switch ($param1) {

            case 'create':
                header('location: ' . URL . 'dashboard/learnercreate');
                break;

            case 'view':
                header('location: ' . URL . 'dashboard/learnerview/' . $param2);
                break;

            case 'edit':
                header('location: ' . URL . 'dashboard/learneredit/' . $param2);
                break;

            case 'delete':
                $list_delete = $this->delete($param2);
                header('location: ' . URL . 'dashboard/learners');
                break;

            default:
                $list = $this->listLearner();
                break;
        }

        $this->view->title = 'Leaners List';
        $this->view->h1 = 'Leaners List';
        $this->view->learnerList = $list;

        $listCount = count($list);

        $this->view->render('header');
        $this->view->render('dashboard/learners');

        if ($listCount <= 8)
            $this->view->sticky = 'true';
        $this->view->render('footer');
    }

    function learnerview($param1 = null) {
        $this->view->title = 'Learners View';
        $this->view->h1 = 'Learners View';

        $this->view->learner = $this->view($param1);
        $this->view->learnerSponsor = $this->getSponsorNameById($this->view->learner['sponsor_id']);


        $birthday = $this->view->learner['date_of_birth'];
        $this->view->learnerAge = $this->getAge($birthday);

        $this->view->render('header');
        $this->view->render('dashboard/learnerview');
        $this->view->render('footer');
    }

    function learnercreate($v=null) {        
        if(isset($v) ) {
            $this->view->error = str_replace('_',' ',$v);
        }
        $this->view->title = 'Leaners Create';
        $this->view->h1 = 'Create Learner';
        $this->view->sponsorList = $this->sponsorList();
        $this->view->render('header');
        $this->view->render('dashboard/learnerCreate');
        $this->view->render('footer');
    }

    function learneredit($param1 = null, $param2 = null) {
        $this->view->title = 'Learners Edit';
        $this->view->h1 = 'Learners Edit';
           
        if(isset($param2)) $this->view->error = str_replace ('_', ' ', $param2);

        $this->view->learnerList = $this->view($param1);
        $birthday = $this->view->learnerList['date_of_birth'];
        $this->view->learnerAge = $this->getAge($birthday);


        $this->view->sponsorList = $this->sponsorList();

        $this->view->render('header');
        $this->view->render('dashboard/learneredit');
        $this->view->render('footer');
    }

    function listLearner() {

        return $this->model->learnerList();
    }

    function create() {
        if (isset($_POST) && !empty($_POST)) {

            $data = array();
            $error = '';
            
            $data['image_data'] = $this->model->processImage($_FILES);
            $data['form_data'] = $this->model->processForm($_POST);
            
            $createdLearner = $this->model->createLearner($data);
            if(isset($createdLearner['error'])){
                foreach($createdLearner['error'] as $key=>$val){
                    $error = str_replace(' ', '_', $val); 
                }
            }
            
            header('location: ' . URL . 'dashboard/learneredit/' . $createdLearner['lastId'] . '/'.$error.'');
            
        } else {

            header('location: ' . URL . 'dashboard/learnercreate');
        }
    }

    function edit($id) {

        if (isset($_POST) && !empty($_POST) && $id != '') {

            $data = array();
            $error = '';
            
            $data['image_data'] = $this->model->processImage($_FILES);
            $data['form_data'] = $this->model->processForm($_POST);

            $this->model->editSave($data);
            header('location: ' . URL . 'dashboard/learneredit/' . $id . '');
        }


        //return $this->model->leanerSingleList($id);
    }

    function view($id) {

        return $this->model->leanerSingleList($id);
    }

    function sponsorList() {

        return $this->model->sponsorList();
    }

    function delete($id) {

        return $this->model->leanerSingleDelete($id);
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

    function getAge($birthday) {
        list($year, $month, $day ) = explode("-", $birthday);
        $year_diff = date("Y") - $year;
        $month_diff = date("m") - $month;
        $day_diff = date("d") - $day;
        if ($day_diff < 0 && $month_diff == 0)
            $year_diff--;
        if ($day_diff < 0 && $month_diff < 0)
            $year_diff--;
        return $year_diff;
    }

}
