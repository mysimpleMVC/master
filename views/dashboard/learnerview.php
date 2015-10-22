<div class="container">
    <div class="row">
        <div class="page-header">
            <h1 class="centered"><?php echo $this->h1; ?></h1>
        </div>
    </div>
    <div class="row">

        <div class="col-md-3 " >

            <img class="img-responsive" src="<?php echo URL; ?>assets/img/<?php print_r($this->learner['image']); ?>">

        </div>
        <div class="col-md-9 " >

            <h2><?php echo $this->learner['first_name'] . ' ' . $this->learner['last_name']; ?></h2>

            <ins>Date of Birth: <?php echo $this->learner['date_of_birth'] ?></ins>
            <br />
            
            <ins>Age: <?php echo $this->learnerAge; ?></ins>
            <br />
            
            <ins>Last Pass: <?php echo $this->learner['pass_rate'] ?></ins>
            <br />
            
            <ins>Sponsored: <a href=""><?php echo $this->learnerSponsor['first_name'] . ' ' . $this->learnerSponsor['last_name'] ?></a></ins>
            <br /><br />
            
            
            <p><?php echo $this->learner['description']; ?></p>
            

            <a data-toggle="tooltip" data-placement="top" title="Edit this learner" href="<?php echo URL; ?>dashboard/learners/edit/<?php print_r($this->learner['id']) ?>"><span title="Edit" class="icon icon-pencil" style="font-size:18px; color:#3498db;"></span></a>

        </div>
    </div>


</div>

