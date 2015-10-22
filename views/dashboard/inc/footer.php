 <?php $v = date('Y-m-d');?>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="<?php echo URL; ?>assets/js/jquery.min.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/js/modernizr.custom.js?v<?php echo $v;?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo URL; ?>assets/js/html5shiv.js"></script>
      <script src="<?php echo URL; ?>assets/js/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js?v<?php echo $v;?>"></script>
    
    <script type="text/javascript" src="<?php echo URL; ?>assets/angular/angular.min.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/angular/angular-route.min.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/angular/angular-touch.min.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/angular/angular-sanitize.min.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/angular/angular-loader.min.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/angular/angular-animate.min.js?v<?php echo $v;?>"></script>
    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo ' 
    <script type="text/javascript" src="'.URL.'views/'.$js.'?v'.$v.'"></script> ';
                    
        }
    }
    ?>
    
    
    <script type="text/javascript" src="<?php echo URL; ?>assets/js/bootstrap.min.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/js/retina.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/js/jquery.easing.1.3.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/js/smoothscroll.js?v<?php echo $v;?>"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/js/jquery-func.js?v<?php echo $v;?>"></script>
  </body>
</html>