<?php include 'pages/includes/header.php'; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Student Information Input Box</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <span><?php echo $raihan ;?></span>
                            <div class="row form-group">
                                <label for="a" class="col-form-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" id="a">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="b" class="col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" id="b">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="c" class="col-form-label col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input type="number" name="phone" class="form-control" id="c">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="d" class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9  px-1">
                                    <input type="file" name="image" class="form-control border-0" id="c" accept="image/*">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="formBtn" class="btn btn-success btn-block">
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
