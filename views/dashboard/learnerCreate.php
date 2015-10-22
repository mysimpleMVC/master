<div class="container">
    <form class="form-horizontal" action="<?php echo URL; ?>dashboard/create/" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="page-header">
                <h1 class=""><?php echo $this->h1; ?></h1>
                <?php if(isset($this->error) && $this->error !=''){
                    echo '<p class="alert alert-danger">'.$this->error.'</p>';
                } ?>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-2" >
                <?php //print_r($this->learnerList['image']); //$this->learnerList;?>
                <img class="img-responsive" src="<?php echo URL; ?>assets/img/image.png">
                
                <input type="file" name="image" class="form-control" >
                
            </div>
            <div class="col-md-10 " >
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <span id="FirstBlock" class="help-block">First Name</span>
                        <input required name="first_name" value="" type="text" class="form-control" id="inputEmail3" placeholder="First Name" aria-describedby="FirstBlock">
                    </div>
                    <div class="col-sm-5">
                        <span id="LastBlock" class="help-block">Last Name</span>
                        <input required name="last_name" value="" type="text" class="form-control" id="inputEmail3" placeholder="Last Name" aria-describedby="LastBlock">
                    </div>
                    
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <span id="DateBlock" class="help-block">Date of Birth</span>
                        <input required id="date" name="date_of_birth" value="" type="date" class="form-control" id="inputEmail3" placeholder="Date of Birth" aria-describedby="DateBlock">
                    </div>
                    <div class="col-sm-5">
                        <span id="DateBlock" class="help-block">Age</span>
                        <p id="age"></p>
                           <!--<input id="age" value="" class="form-control" type="text" placeholder="Readonly input here…" readonly>-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <span id="helpBlock" class="help-block">Grade</span>
                        <input required name="grade" value="" type="number" class="form-control" id="inputEmail3" placeholder="Grade" aria-describedby="helpBlock">

                    </div>
                    <div class="col-sm-5">
                        <span id="PassBlock" class="help-block">Average Pass</span>
                        <input required name="pass_rate" value="" type="number" class="form-control" id="inputEmail3" placeholder="Average Pass" aria-describedby="PassBlock">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-5">
                        <span id="sponsorBlock" class="help-block">Sponsor</span>

                        <select required name="sponsor_id" class="form-control" aria-describedby="sponsorBlock">
                            <?php
                            $selected = '';
                            foreach ($this->sponsorList as $sponsors => $sponsor) {



                                echo '<option ' . $selected . ' value="' . $sponsor['id'] . '">'
                                . '' . $sponsor['first_name'] . ' ' . $sponsor['last_name'] . ''
                                . '</option>';
                            }
                            ?>

                        </select>

                    </div>
                    <div class="col-sm-5">
                        <span id="sponsorBlock" class="help-block">Create</span
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
                            Create Sponsor
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <span id="DescriptionBlock" class="help-block">Description</span>
                        <textarea required name="description" class="form-control" rows="8" aria-describedby="DescriptionBlock"></textarea>
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

