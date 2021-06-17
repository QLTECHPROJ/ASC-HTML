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
                <li class="breadcrumb-item"><a href="#" class="nav-link p-0">CAMPS & PROGRAMS</a></li>
                </ol>
            </nav>
            <h2 class="heading-banner">CAMPS & PROGRAMS</h2>
            </div>
        </div>
    </section>

    <!--  -->

    <?php  
        include("Common/top_form.php");
    ?>

    <!--  -->
  
    <section class="No-camp-section-2">
        <div class="container">
            <div class="title mb-30">
                <h2>
                    SELECT A SPORT TO VIEW AND BOOK CAMPS…
                </h2>
                <p class="text-center">
                    No camps or programs were found matching your selection.
                </p>
            </div>
            <div class="title">
                <h2>
                    Notify Me
                </h2>
                <p class="text-center">
                    Please fill your email to get notified when similar camps are available again.
                </p>
            </div>
        </div>
    </section>

    <!--  -->

    
    <section class="No-camp-section-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-7 md-mb-4">
                    <Form class="notify-form">
                        
                        <div class="form-group mb-30">
                            <label class="master-label">Email</label>
                            <input type="text" class="mb-1 master form-control" placeholder="Enter your email">
                        </div>
                        
                        <div class="form-group">
                            <label class="master-label">Remarks (optional)</label>
                            <textarea class="mb-1 text-area master form-control" placeholder="Your message" rows="10"></textarea>
                        </div>
                        <div class="form-group mb-30 text-center">
                            <Button type="button" class="uppercase btn-sm btn-orange mb-0">
                                Notify me
                            </Button> 
                        </div>
                    </Form>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="add-image">
                        <img src="image/nav-image.png" fluid alt="cardhover" />
                    </div>
                    <p class="font-16 font-medium mt-2">Want to save up to <span class="font-bold">$141.75?</span> Checkout<br> our <a href="membership.php" class="decoration-yes">Membership Passes</a></p>
                    
                    <div class="call-div">
                        <a class="nav-link p-0 font-22 font-bold text-white uppercase text-center" href="tel:1300914368">CALL on 
                        <br>1300 914 368</a>
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