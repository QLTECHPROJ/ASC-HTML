<!DOCTYPE html>
<html lang="en">

<head>
    <title>ASC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/gatsby-css.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--  -->

    <?php  
        include("Common/header.php");
    ?>
    
    <!--  -->

    <section class="Banner-Section">
        <div class="container">
            <div class="Banner-Section-data">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="nav-link p-0">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Resources</li>
                </ol>
            </nav>
            <h2 class="heading-banner">Resources</h2>
            </div>
        </div>
    </section>

    <!--  -->

    <section class="Resource-section-2">
        <div class="container">
            <div class="Resource-Section-2-data">
                <div class="p-0 border-0 justify-content-center d-flex mb-30">
                    <nav>
                        <div class="nav nav-tabs nav-pills" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active uppercase font-bold" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">All</a>
                        <a class="nav-item nav-link uppercase font-bold" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-selected="false">Videos</a>
                        <a class="nav-item nav-link uppercase font-bold" id="nav-guides-tab" data-toggle="tab" href="#nav-guides" role="tab" aria-controls="nav-guides" aria-selected="false">Guides</a>
                        <a class="nav-item nav-link uppercase font-bold" id="nav-flyer-tab" data-toggle="tab" href="#nav-flyer" role="tab" aria-controls="nav-flyer" aria-selected="false">Camp flyer</a>
                        </div>
                    </nav>
                </div>
                
                <div class="tab-content text-left" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <section class="Resource-all">
                            <div class="container">
                                <div class="Resource-all-data">

                                    <!-- videos  -->
                                    <div class="row">
                                        <div class="col-xl-12 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 video card">
                                                <div class="card-img">
                                                    <img src="image/resource-all-video-card.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="mb-0 card-title">Australian Sports Camps Soccer Home Training</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- guides  -->
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-video-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-video-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-video-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- flyers -->

                                    <div class="row">
                                        <div class="col-xl-6 col-lg-5 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-video-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-5 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-video-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                        <section class="Resource-videos">
                            <div class="container">
                                <div class="Resource-videos-data">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 video card">
                                                <div class="card-img">
                                                    <img src="image/resource-video-card-1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="mb-0 card-title">Australian Sports Camps Soccer Home Training</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 video card">
                                                <div class="card-img">
                                                    <img src="image/resource-video-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="mb-0 card-title">Australian Sports Camps Soccer Home Training</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 video card">
                                                <div class="card-img">
                                                    <img src="image/resource-video-card-3.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="mb-0 card-title">Australian Sports Camps Soccer Home Training</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="nav-guides" role="tabpanel" aria-labelledby="nav-guides-tab">
                        <section class="Resource-guides">
                            <div class="container">
                                <div class="Resource-guides-data">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-3.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-3.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="justify-content-center d-flex">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="nav-flyer" role="tabpanel" aria-labelledby="nav-flyer-tab">
                        <section class="Resource-flyers">
                            <div class="container">
                                <div class="Resource-flyers-data">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-3.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-1.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-2.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 resource-card-col">
                                            <div class="resource-card mb-0 all card">
                                                <div class="card-img">
                                                    <img src="image/resource-guide-card-3.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Cricket drills that parents and kids can practice together</h5>
                                                    <p class="line-break-3 card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntant and complete</p>
                                                    <a class="nav-link p-0 d-flex align-items-center" href="">Read more<i class="fa fa-chevron-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="justify-content-center d-flex">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
            </div>
        </div>
    </section>

    <!--  -->

    <?php  
        include("Common/Bottom_form.php");
    ?>

    <!--  -->

    <?php  
        include("Common/footer.php");
    ?>
    
    <!--  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>