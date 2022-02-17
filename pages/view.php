<?php include 'pages/includes/header.php'; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($students as $student) { ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?php echo $student['image'] ?>" alt="image" class="card-img-top" style="height: 230px">
                        <div class="card-body">
                            <h2 style="font-size: 18px">Name: <?php echo $student['name'] ?></h2>
                            <p class="pb-0">Email: <?php echo $student['email'] ?></p>
                            <p class="pb-0">Phone: <?php echo $student['phone'] ?></p>
                            <a href="javascript:void(0)" class="btn btn-outline-success float-right">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include 'pages/includes/footer.php'; ?>

