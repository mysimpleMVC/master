
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1 class="centered"><?php echo $this->title; ?></h1>
        </div>
        <div class="row">
            <div class="col-md-12 centered">
                <div class="col-md-4 "></div>
                <div class="col-md-4 ">
                    <form action="login/run" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="login" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>

                    </form>
                    <br/><br/><br/>
                </div>
                <div class="col-md-4 "></div>
            </div>
        </div>
    </div>
</div>