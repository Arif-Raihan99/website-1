<?php include 'pages/includes/header1.php'; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header py-1">
                        <h4 class="text-center">Sign up Here</h4>
                        <div class="col-md-12">
                            <a href="action.php?pages=login" class="float-right btn btn-outline-success py-1">Sign In</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <span><?php echo $results ;?></span>
                            <div class="row form-group">
                                <label for="b" class="col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" id="b">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="c" class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" id="c">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="homeBtn" class="btn btn-success btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'pages/includes/footer.php'; ?>
