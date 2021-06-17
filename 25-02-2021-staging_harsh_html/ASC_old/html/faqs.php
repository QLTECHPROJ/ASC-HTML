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
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav>
            <h2 class="heading-banner">FAQS (FREQUENTLY ASKED QUESTIONS)</h2>
            </div>
        </div>
    </section>

    <!--  -->

    <section class="Faq-Section-2">
        <div class="container">
            <div class="Faq-Section-2-data accordian-div">
                <div id="accordion" class="accordion">
                    <div class="card p-0 mb-4 id0">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link font-18 font-medium p-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How much does it normally cost to attend a camp?
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body font-16 font-regular">
                            Lorem ipsum dolor sit amet.
                        </div>
                        </div>
                    </div>
                    <div class="card p-0 mb-4 id0">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed font-18 font-medium p-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How long do I have to use the pass?
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body font-16 font-regular">
                        Lorem ipsum dolor sit amet.
                        </div>
                        </div>
                    </div>
                    <div class="card p-0 mb-4 id0">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed font-18 font-medium p-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Can I use the pass all at once?
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body font-16 font-regular">
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                    </div>
                    <div class="card p-0 mb-4 id0">
                        <div class="card-header" id="headingfour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed font-18 font-medium p-0" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                            Can I use the pass in conjunction with other offers?
                            </button>
                        </h5>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body font-16 font-regular">
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                    </div>
                    <div class="card p-0 mb-4 id0">
                        <div class="card-header" id="headingfive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed font-18 font-medium p-0" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                            Can I book in multiple participants at the same time?
                            </button>
                        </h5>
                        </div>
                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                            <div class="card-body font-16 font-regular">
                            Lorem ipsum dolor sit amet, consetetur
                            </div>
                        </div>
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