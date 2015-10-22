<?php

class index_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function getSlug($v){
        return $this->getSlugByName($v);
    }

}