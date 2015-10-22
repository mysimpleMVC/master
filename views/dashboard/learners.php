<div class="container">
    <div class="row">
        <div class="page-header">
            <h1 class="centered"><?php echo $this->h1; ?></h1>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-striped table-responsive">
            <caption >
                
                <a href="<?php echo URL; ?>dashboard/learners/create"><button type="button" class="pull-right btn btn-success navbar-btn">Create New Learner</button></a>

                <!--<form class="alert alert-info navbar-form navbar-left pull-right" role="search">-->

                    <!--<div class="form-group">-->
                        <!--<input type="text" class="form-control" placeholder="Search">-->
                    <!--</div>-->

                    <!--<button type="submit" class="btn btn-default">Submit</button>-->

                </form>
                
            </caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($this->learnerList)) : ?>
                    <?php foreach ($this->learnerList as $key => $value) : ?>
                        <tr>
                            <th scope="row"><?php print_r($value['id']) ?></th>
                            <td><a href="<?php echo URL; ?>dashboard/learners/edit/<?php print_r($value['id']) ?>" data-toggle="tooltip" data-placement="top" title="EDIT: <?php print_r($value['first_name']) ?> <?php print_r($value['last_name']) ?>"><?php print_r($value['first_name']) ?></a></td>
                            <td><?php print_r($value['last_name']) ?></td>
                            <td>


                                <a data-toggle="tooltip" data-placement="top" title="View" href="<?php echo URL; ?>dashboard/learners/view/<?php print_r($value['id']) ?>"><span   class="icon icon-search" style="font-size:18px; color:#3498db;"></span></a>
                                <a data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo URL; ?>dashboard/learners/edit/<?php print_r($value['id']) ?>"><span  class="icon icon-pencil" style="font-size:18px; color:#3498db;"></span></a>
                                <a data-toggle="tooltip" data-placement="top" title="Delete" href="<?php echo URL; ?>dashboard/learners/delete/<?php print_r($value['id']) ?>"><span   class="icon icon-folder-remove" style="font-size:18px; color:#3498db;"></span></a>


                            </td>
                        </tr>
                    <?php endforeach; ?> 
                <?php endif; ?>
            </tbody>
        </table>
        <div class="col-md-3 " ></div>
        <div class="col-md-9 " ></div>
    </div>


</div>

