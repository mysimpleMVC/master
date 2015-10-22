<?php

class Dashboard_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function learnerList() {
        return $this->db->select('SELECT * FROM learner order by date_of_birth ASC');
    }

    public function leanerSingleList($id) {

        return $this->db->selectOne('SELECT * FROM learner WHERE id = :id', array('id' => $id));
    }

    public function sponsorList() {

        return $this->db->select('SELECT * FROM sponsor');
    }

    public function leanerSingleDelete($id) {

        $this->db->delete('learner', "id = '$id'");
    }

    public function createLearner($data) {
        
        $retun = array();
        //before we create lets check if theres a learner by the same name
        $learnerFirstName = $data['form_data']['first_name'];
        $learnerLastName = $data['form_data']['last_name'];
        
        $count = $this->db->selectOne('SELECT COUNT(*) as CNT FROM learner WHERE first_name = :first_name and last_name = :last_name', array('first_name' => $learnerFirstName, 'last_name' => $learnerLastName));
        
//        $this->myDebug($data);
//        $this->myDebug($count['CNT']);
//        die('HERERE');
        
        if(isset($count) && $count['CNT'] > 0){
            $error = '';
            $error = 'A_learner_by_the_same_name_already_exists';
            header('location: ' . URL . 'dashboard/learnercreate/'.$error.'');
            die;
        }

        //insert post data    
        $this->db->insert('learner', array(
            'first_name' => $data['form_data']['first_name'],
            'last_name' => $data['form_data']['last_name'],
            'date_of_birth' => $data['form_data']['date_of_birth'],
            'grade' => $data['form_data']['grade'],
            'pass_rate' => $data['form_data']['pass_rate'],
            'sponsor_id' => $data['form_data']['sponsor_id'],
            'description' => $data['form_data']['description']
        ));

        // if image passes with no errors update insert with image!

        if (isset($data['image_data']['image_errors'])) {
            $return['error'] = $data['image_data']['image_errors'];
        } else {
            $learnerImageUpload = $this->learnerImageUpload($data['image_data']);
           
            if ($learnerImageUpload) {
                $postData = array('image' => str_replace(LEARNERS_UPLOAD_PATH,'',$learnerImageUpload));
                $this->db->update('learner', $postData, "`id` = {$this->db->lastId}");
            }
        }

        $return['lastId'] = $this->db->lastId;

        return $return;
    }

    public function learnerImageUpload($v) {
        $target_file = LEARNERS_UPLOAD_PATH . basename($v["image"]["file_name"]);
        
        if (file_exists($target_file)) {
            $rawBaseName = pathinfo($v["image"]["file_name"], PATHINFO_FILENAME);
            $extension = pathinfo($v["image"]["file_name"], PATHINFO_EXTENSION);
            $target_file = LEARNERS_UPLOAD_PATH . basename($rawBaseName . '-'. date('Y-m-d-h-i-s') . '.' . $extension);
        }

        if (move_uploaded_file($v["image"]["file_tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return false;
        }
    }

    public function editSave($data) {
        
//        $this->myDebug($data);
//        die;
        
        $postData = array(
            'first_name' => $data['form_data']['first_name'],
            'last_name' => $data['form_data']['last_name'],
            'date_of_birth' => $data['form_data']['date_of_birth'],
            'grade' => $data['form_data']['grade'],
            'pass_rate' => $data['form_data']['pass_rate'],
            'sponsor_id' => $data['form_data']['sponsor_id'],
            'description' => $data['form_data']['description']
        );

        $this->db->update('learner', $postData, "`id` = {$data['form_data']['id']}");
        
        if (isset($data['image_data']['image_errors'])) {
            $return['error'] = $data['image_data']['image_errors'];
        } else {
            $learnerImageUpload = $this->learnerImageUpload($data['image_data']);
           
            if ($learnerImageUpload) {
                $postData = array('image' => str_replace(LEARNERS_UPLOAD_PATH,'',$learnerImageUpload));
                $this->db->update('learner', $postData, "`id` = {$data['form_data']['id']}");
            }
        }
    }

    public function xhrInsert() {
        $text = $_POST['text'];

        $this->db->insert('data', array('text' => $text));

        $data = array('text' => $text, 'id' => $this->db->lastInsertId());
        echo json_encode($data);
    }

    public function xhrGetListings() {
        $result = $this->db->select("SELECT * FROM data");
        //print_r($result); die;
        echo json_encode($result);
    }

    public function xhrDeleteListing() {
        $id = $_POST['id'];
        return $this->db->delete('data', "dataid = '$id'");
    }

    public function leanerSponsor($id) {
        return $this->db->selectOne('SELECT * FROM sponsor WHERE id = :id', array('id' => $id));
    }

}
