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
    <style>
        .bs-tooltip-auto[x-placement^=top] .arrow::before, .bs-tooltip-top .arrow::before
        {
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
        }
    </style>
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
                <li class="breadcrumb-item">Feedback</li>
                </ol>
            </nav>
            <h2 class="heading-banner">CAMP FEEDBACK</h2>
            </div>
        </div>
    </section>

    <!--  -->


    <section class="Feedback-Section-2">
        <div class="container">
            <div class="Feedback-Section-2-data">
                <p class="font-18 font-bold text-center">Have you recently attended an ASC camp? Then Australian Sports Camps would love to hear your comments. We appreciate and take into account all feedback, so look forward to hearing from you!</p>
                <p class="font-18 font-medium text-center mb-30">Thanks for your recent attendance at an ASC event. Please fill in the feedback form below.</p>
                <div class="gray-data max-padd">
                    <h4 class="font-18 font-bold text-center color-3b mb-30">Feedback Form</h4>
                    <form>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 mb-0">
                                <div class="form-group mb-30">
                                    <label class="master-label">Select your state:*</label>
                                    <select class="mb-1 master form-control">
                                        <option>state</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 mb-0">
                                <div class="form-group mb-30">
                                    <label class="master-label">
                                        Please rate your child’s camp experience.*
                                        <button type="button" class="btn ml-3 p-0 btn-transparent" data-toggle="tooltip" data-placement="top" title="From 1 (very dissatisfied) to 5 (very satisfied)">
                                            <img src="image/information-icon.svg" width="23" height="23" class="img-fluid">
                                        </button>
                                    </label>
                                    <div class="d-block">
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input " name="blankRadio" id="blankRadio1" checked>
                                            <label class="form-check-label" for="blankRadio1">1</label>
                                        </div>
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input" name="blankRadio" id="blankRadio2">
                                            <label class="form-check-label" for="blankRadio2">2</label>
                                        </div>
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input " name="blankRadio" id="blankRadio3">
                                            <label class="form-check-label" for="blankRadio3">3</label>
                                        </div>
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input" name="blankRadio" id="blankRadio4">
                                            <label class="form-check-label" for="blankRadio4">4</label>
                                        </div>
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input " name="blankRadio" id="blankRadio5">
                                            <label class="form-check-label" for="blankRadio5">5</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-0">
                                <div class="form-group mb-30">
                                    <label class="master-label">Which group were you in at the camp?</label>
                                    <input type="text" class="mb-1 master form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 mb-0">
                                <div class="form-group mb-30">
                                    <label class="master-label">Which session did you enjoy the most?</label>
                                    <input type="text" class="mb-1 master form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 mb-0">
                                <div class="form-group mb-30">
                                    <label class="master-label">How would you rate your group coach?</label>
                                    <select class="mb-1 master form-control">
                                        <option>Select an option</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-0">
                                <div class="form-group mb-30">
                                    <label class="master-label mb-3">Did you enjoy the fitness session & speed testing?</label>
                                    <div class="d-block">
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input " name="blankRadio" id="yes1" checked>
                                            <label class="form-check-label" for="yes1">Yes</label>
                                        </div>
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input" name="blankRadio" id="no1">
                                            <label class="form-check-label" for="no1">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-0">
                                <div class="form-group mb-30">
                                    <label class="master-label">Your overall opinion of the camp, and any other comments or suggestions:</label>
                                    <textarea class="mb-1 text-area master form-control" placeholder="" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-0">
                                <div class="form-group mb-30">
                                    <label class="master-label mb-3">Can ASC contact you about your feedback?*</label>
                                    <div class="d-block">
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input " name="blankRadio" id="yes2" checked>
                                            <label class="form-check-label" for="yes2">Yes</label>
                                        </div>
                                        <div class="form-check-inline custom-radio-main">
                                            <input type="radio" class="color-3b form-check-input" name="blankRadio" id="no2">
                                            <label class="form-check-label" for="no2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 mb-20">
                                <div class="form-group mb-30">
                                    <label class="master-label mb-0 italic-text">Please note: if you don't wish to be contacted, ASC won't be able to respond to your feedback</label>
                                </div>
                            </Col>
                            <div class="col-xl-12 col-lg-12 mb-0 text-center">
                                <button class="uppercase btn-sm btn-orange">Send Feedback</button>
                            </div>
                        </div>
                    </form>
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