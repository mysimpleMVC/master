
    <div class="footer" id="footerwrap">
            <div class="container">
                    <h4>Assist a learner Trust - Copyright 2015</h4>
            </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="<?php echo URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo URL; ?>assets/js/html5shiv.js"></script>
      <script src="<?php echo URL; ?>assets/js/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
	<script type="text/javascript" src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>assets/js/retina.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>assets/js/jquery-func.js"></script>
  </body>
</html>