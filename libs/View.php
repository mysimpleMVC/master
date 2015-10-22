<?php

class View {

    function __construct() {
        //echo 'this is the view';
    }

    public function render($name, $noInclude = null, $vars = false)
    {
      require 'views/' . $name . '.php';    
    }

}