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
                <li class="breadcrumb-item"><a href="#" class="nav-link p-0">Shop </a></li>
                <li class="breadcrumb-item">AFL FOOTBALL PACK</li>
                </ol>
            </nav>
            <h2 class="heading-banner">PACK</h2>
            </div>
        </div>
    </section>

    <!--  -->

    <section class="Product-details-Section-2">
        <div class="container">
            <div class="Product-details-Section-2-data">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 lg-mb-4">
                        <div class="gray-data text-center">
                            <img src="image/product-img.png" class="img-fluid" width="400" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 ">
                        <div class="product-content text-left">
                            <div class="title text-left mb-0">
                                <h2>AFL FOOTBALL PACK</h2>
                            </div>
                            <h3 class="font-22 color-blue font-bold">$44.50</h3>
                            <h4 class="font-16 font-bold color-3b mb-2">Introducing Australian Sports Camps New Drills & Equipment Footy Pack! </h4>
                            <p class="font-16 font-medium color-3b">Let us help you keep your kids Healthy and Active during these unprecedented times, while still enjoying a taste of the ASC Experience.</p>

                            <ul class="mb-0 pl-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <h2 class="font-18 font-medium">Quantity :</h2> 
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex title quantity-data align-items-center">
                                        <Button id="minus">-</Button>
                                        <input id="qty" class="main-h2 font-medium qty mx-3" type="text" value="1"> 
                                        <Button id="plus">+</Button>
                                    </div>
                                </li>
                            </ul>
                            <!-- <button class="uppercase btn-sm btn-orange">BUY Now</button> -->
                            <a href="checkout.php" class="uppercase btn btn-sm btn-orange">BUY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->

    <section class="Product-details-Section-3">
        <div class="container">
            <div class="Product-details-Section-3-data">
                
            <div class="mb-30">
                    <h3 class="font-bold font-20 color-3b mb-2 text-center">PRODUCT DETAILS</h3>
                </div>
                <div class="gray-data">

                    <div class="mb-30">
                        <p class="font-medium font-16 color-3b text-left">Introducing Australian Sports Camps New Drills & Equipment Footy Pack!</p>
                        <p class="font-medium font-16 color-3b text-left">This pack includes the following:</p>
                    </div>
                    <div class="mb-30">
                        <ul class="pl-3 mb-0 list-style-disc">
                            <li class="font-bold font-16 color-3b text-left">ASC AFL booklet.  Over 25 pages of drills, information and fitness activities to improve your game</li>
                            <li class="font-bold font-16 color-3b text-left">ASC size 3 AFL ball</li>
                            <li class="font-bold font-16 color-3b text-left">6 blue cones which can be used for drills and fitness</li>
                            <li class="font-bold font-16 color-3b text-left">ASC cap which coaches wear, and prize winners at our camps receive</li>
                            <li class="font-bold font-16 color-3b text-left">ASC carry bag</li>
                        </ul>
                    </div>
                    <div class="mb-0">
                        <p class="font-medium font-16 color-3b text-left">The booklet has been written by Australian Sports Camps staff and coaches for parents wanting to develop their children’s AFL skills.  Accordingly, we cover a variety of drills to develop the foundation skills of AFL. It will be emailed as a PDF and also contains useful links to video examples of our drills.</p>
                        <p class="font-medium font-16 color-3b text-left">Practice makes perfect and homework pays off!  So, we hope you find this pack of benefit for your child.  We know how hard it is with isolation and hope this pack enables you and your child to remain active, healthy and having fun whilst training.</p>
                        <p class="font-medium font-16 color-3b text-left">We look forward to seeing you again soon!</p>
                        <p class="font-medium font-16 color-3b text-left">*Pack only available in Australia</p>
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