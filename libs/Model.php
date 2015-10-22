<?php

class Model {

    function __construct() {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }
    
    public function myDebug($v){
        echo'<pre>';
        print_r($v);
        echo'<br />';
    }

    public function redirect($url, $statusCode = 303) {
        header('Location: ' . $url, true, $statusCode);
        die();
    }

    public function getSlugByName($v) {
        return $this->db->selectOne('SELECT * FROM sitePages WHERE name = :name', array('name' => $v));
    }

    public function processForm($v) {
        foreach($v as $key => $val)
            {
                $data[$key] = $val;
            }
            return $data;
    }
    
    public function processImage($v) {
        
        if (isset($v) && !empty($v)) {
            
                $imageProcessedData = $this->doImage($v);
                $imageData['image_data'] = $imageProcessedData;
                
                if (isset($imageData['image_data']['image']))
                    $data['image'] = $imageData['image_data']['image'];
                
                if(!empty($imageData['image_data']['errors']))
                    $data['image_errors'] = $imageData['image_data']['errors'];
            }
            return $data;
    }
    
    public function doImage($fileDate) {

        if (isset($fileDate) && !empty($fileDate)) {
            
            $errors = array();
            
            $dataArray = array();
            $data = array();
            
            $max_file_size = MAX_FILE_SIZE;
            $this->data['file_size'] = $data['file_size'] = $fileDate['image']['size'] / 1024;
            $this->data['file_max_size'] = $max_file_size;

            $data['file_name'] = $fileDate['image']['name'];
            $data['file_tmp_name'] = $fileDate['image']['tmp_name'];
            
            $file_type_data = explode('/', $fileDate['image']['type']);
            if(isset($file_type_data[1])) $data['file_type'] = $file_type_data[1];

            $errors = $this->processImageErrors($fileDate);
            if(empty($errors)) $dataArray['image'] = $data;
            $dataArray['errors'] = $errors;
            
            return  $dataArray;
        }
        else 
            return false;
    }

    public function processImageErrors($fileDate) {
        $file_error = $this->imageErrorCode($fileDate['image']['error']);
        $file_error_code = $file_error['key'];
        $file_error_val = str_replace('file', 'file (' . $fileDate['image']['name'] . ')', $file_error['val']);

        if (isset($this->data['file_size']) && $this->data['file_size'] >= $this->data['file_max_size']) {
            $errors['image_size'] = 'The image uploaded exceeds ' . $this->data['file_max_size'] . ' KB';
        }

        if ($file_error_code != '0') {
            $errors[$file_error_code] = $file_error_val;
        }

        if (!empty($fileDate['image']['type'])) {
            $file_type_data = explode('/', $fileDate['image']['type']);
            $fileType = $file_type_data[0];
            $fileExt = $file_type_data[1];

            if (isset($fileType) && $fileType !== 'image') {
                $errors[$fileType] = 'You may only upload images, you have uploaded a <strong>' . $fileExt . '</strong> file!';
            }
            
            if (isset($fileExt) && ($fileExt == 'png' || $fileExt == 'jpeg' || $fileExt == 'jpg' || $fileExt == 'gif')) {}
            else {
                $errors[$fileExt] = 'You may only upload images of type GIF, JPEG or PNG. You have uploaded a <strong>' . $fileExt . '</strong> file!';
            }
        }
        if (isset($errors)) return $errors;
        else return false;
    }

    public function imageStatusCodes() {

        $status_codes = array(
            0 => "There is no error, the file uploaded with success",
            1 => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
            2 => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
            3 => "The uploaded file was only partially uploaded",
            4 => "No file was uploaded",
            6 => "Missing a temporary folder");
        
        return $status_codes;
    }
    
    public function imageErrorCode($code) {

        $status_codes = $this->imageStatusCodes();
        $statusArray = array();
        foreach ($status_codes as $key => $val) {
            if ($key == $code) {
                $statusArray['key'] = $key;
                $statusArray['val'] = $val;
            }
        }
        return $statusArray;
    }

}
