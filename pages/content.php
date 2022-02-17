<?php include 'pages/includes/header.php'; ?>

<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <ul class="navbar-nav navbar-expand mx-auto">
                    <li class="nav-item"><a href="action.php?pages=world" class="nav-link px-3 btn btn-outline-success py-1 mx-2">বিশ্ব</a></li>
                    <li class="nav-item"><a href="action.php?pages=bd" class="nav-link px-3 btn btn-outline-success py-1 mx-2">বাংলাদেশ</a></li>
                    <li class="nav-item"><a href="action.php?pages=business" class="nav-link px-3 btn btn-outline-success py-1 mx-2">বাণিজ্য</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="py-3">
    <div class="container">
        <div class="row">
            <?php foreach ($types as $type) { ?>
            <div class="col-md-3">
                <div class="card " style="height: 350px">
                    <img src="<?php echo $type['image']; ?>" alt="">
                    <div class="card-body pt-2 pb-4 px-1">
                        <a href="" class="pb-5"><h5 style="font-size: 15px; font-weight: bold "><?php echo $type['title']; ?></h5></a>
                        <p class="text-justify" style="font-size: 14px; color: #929292 "><?php echo $type['description']; ?></p>
                        <span style="font-size: 12px; color: #bebebe "><?php echo $type['time']; ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'; ?>
