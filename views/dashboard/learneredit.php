<div class="container">
    <form class="form-horizontal" action="<?php echo URL; ?>dashboard/edit/<?php echo ($this->learnerList['id']); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" class="form-control" value="<?php echo ($this->learnerList['id']); ?>">
        <div class="row">
            <div class="page-header">
                <h1 class=""><?php echo $this->h1; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2" >
                <?php //print_r($this->learnerList['image']); //$this->learnerList;?>
                <img class="img-responsive" src="<?php echo URL; ?>assets/img/learners/<?php echo ($this->learnerList['image']); ?>">
                <input type="file" name="image" class="form-control" >
                
                <?php if(isset($this->error)): ?>
                <div class="alert alert-danger"><?php echo $this->error; ?></div>
                <?php endif; ?>
                    
                    
            </div>
            <div class="col-md-10 " >
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <span id="FirstBlock" class="help-block">First Name</span>
                        <input required name="first_name" value="<?php echo ($this->learnerList['first_name']); ?>" type="text" class="form-control" id="inputEmail3" placeholder="First Name" aria-describedby="FirstBlock">
                    </div>
                    <div class="col-sm-5">
                        <span id="LastBlock" class="help-block">Last Name</span>
                        <input required name="last_name" value="<?php echo ($this->learnerList['last_name']); ?>" type="text" class="form-control" id="inputEmail3" placeholder="Last Name" aria-describedby="LastBlock">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <span id="DateBlock" class="help-block">Date of Birth</span>
                        <input required name="date_of_birth" value="<?php echo ($this->learnerList['date_of_birth']); ?>" type="date" class="form-control" id="inputEmail3" placeholder="Date of Birth" aria-describedby="DateBlock">
                    </div>
                    <div class="col-sm-5">
                        <span id="DateBlock" class="help-block">Age</span>
                     
                        <input value="<?php echo $this->learnerAge; ?>" class="form-control" type="text" placeholder="Readonly input here…" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <span id="helpBlock" class="help-block">Grade</span>
                        <input required name="grade" value="<?php echo ($this->learnerList['grade']); ?>" type="number" class="form-control" id="inputEmail3" placeholder="Grade" aria-describedby="helpBlock">

                    </div>
                    <div class="col-sm-5">
                        <span id="PassBlock" class="help-block">Average Pass</span>
                        <input required name="pass_rate" value="<?php echo ($this->learnerList['pass_rate']); ?>" type="number" class="form-control" id="inputEmail3" placeholder="Average Pass" aria-describedby="PassBlock">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <span id="sponsorBlock" class="help-block">Sponsor</span>
                        
                        <select required name="sponsor_id" class="form-control" aria-describedby="sponsorBlock">
                            <?php
                            $selected = '';
                            foreach($this->sponsorList as $sponsors=>$sponsor){
                                
                                if($this->learnerList['sponsor_id'] == $sponsor['id']) 
                                    $selected = 'selected';
                                else $selected = '';
                               
                                echo '<option '.$selected.' value="'.$sponsor['id'].'">'
                                        . ''.$sponsor['first_name'].' '.$sponsor['last_name'].''
                                        . '</option>';
                            }
                            ?>
                            
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <span id="DescriptionBlock" class="help-block">Description</span>
                        <textarea required name="description" class="form-control" rows="8" aria-describedby="DescriptionBlock"><?php echo ($this->learnerList['description']); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

