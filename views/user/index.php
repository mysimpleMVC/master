
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1 class="centered"><?php echo $this->title; ?></h1>
        </div>
        <div class="row">
            <div class="col-md-12 centered">
                <div class="col-md-6 ">
                    <form action="<?php echo URL; ?>user/create" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="col-sm-2 control-label">Login</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="login" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputRole" class="col-sm-2 control-label">Role</label>
                            <div class="col-sm-10">
                                <select name="role" class="form-control" id="exampleInputRole" required>
                                    <option value="default">Default</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>

                    </form>
                </div>
                <div class="col-md-6 ">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="centered">#</th>
                                <th class="centered">Name</th>
                                <th class="centered">Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($this->userList as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $value['userid'] . '</td>';
                            echo '<td>' . $value['login'] . '</td>';
                            echo '<td>' . $value['role'] . '</td>';
                            echo '<td>
                                <a href="' . URL . 'user/edit/' . $value['userid'] . '"><span title="Edit" class="icon icon-pencil" style="font-size:18px; color:#3498db;"></span></a> 
                                <a href="' . URL . 'user/delete/' . $value['userid'] . '"><span title="Delete"  class="icon icon-folder-remove" style="font-size:18px; color:#3498db;"></span></a></td>';
                            echo '</tr>';
                        }
                        ?>
                    </table>
                    <br/><br/><br/>
                </div>

            </div>
        </div>
    </div>
</div>