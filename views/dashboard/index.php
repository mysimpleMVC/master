<div class="container">
    <div class="row">
        
        <div class="page-header">
            <h1><?php echo $this->h1; ?></h1>
        </div>
        
        <div class="row">
            <div class="col-md-6 " >
                <div class="alert alert-info alert-dismissible fade in" >
                    
                    <h2>Create a Task</h2> 

                    <form id="randomInsert" action="<?php echo URL; ?>dashboard/xhrInsert/" method="post" class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2">Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter the task" name="text" required>
                        </div>

                        <button type="submit" class="btn btn-default">Add task</button>
                        
                    </form>

                </div>

                <div class="well well-sm "><h2>Tasks</h2>   
                    <div id="listInserts">
                    </div>
                </div>

            </div>
            
            <div class="col-md-6 ">
                
                <div class="alert alert-info alert-dismissible fade in" >
                    
                    <h2>Search for a learner</h2> 

                    <form id="randomInsert" action="<?php echo URL; ?>dashboard/xhrSearch/" method="post" class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2">Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Learners name" name="text" required>
                        </div>

                        <button type="submit" class="btn btn-default">Add task</button>
                        
                    </form>

                </div>

                <div class="well well-sm "><h2>Learners</h2>   
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>