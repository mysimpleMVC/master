
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1 class="centered"><?php echo $this->title; ?></h1>
        </div>
        <div class="row">
            <div class="col-md-12 centered">

                <div class="col-md-6 ">
                    <form method="post" action="<?php echo URL; ?>note/create">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Content</label>
                            <textarea class="form-control" id="exampleInputEmail2" placeholder="content" name="content" required rows="9"></textarea>

                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div class="col-md-6 ">
                    <table class="table table-bordered table-striped">
                        <?php
                        foreach ($this->noteList as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $value['title'] . '</td>';
                            echo '<td>' . $value['date_added'] . '</td>';
                            echo '<td><a href="' . URL . 'note/edit/' . $value['noteid'] . '">Edit</a></td>';
                            echo '<td><a class="delete" href="' . URL . 'note/delete/' . $value['noteid'] . '">Delete</a></td>';
                            echo '</tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

