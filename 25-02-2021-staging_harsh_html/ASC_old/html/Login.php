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

    <section class="Login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10 col-sm-12">
                    <div class="gray-data">
                        <div class="title">
                            <h2 class="mb-2">Returning customer</h2>
                        </div>
                        <form>
                            <div class="form-group mb-30">
                                <label class="master-label">Username or email address *</label>
                                <input type="text" class="mb-1 master form-control"
                                    placeholder="Enter your Username or email address">
                            </div>
                            <div class="form-group mb-20">
                                <label class="master-label">Password</label>
                                <input type="text" class="mb-1 master form-control"
                                    placeholder="Password ">
                            </div>
                            <div class="d-flex justify-content-between d-small-block">
                                <div class="form-group mb-3 sm-mb-1">
                                    <label class="custom gray-check mb-0">Remember me
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="#" class="nav-link p-0 font-16 font-medium color-3b mb-3">Lost your password?</a>
                            </div>
                            <div class="mb-30">
                               <!-- <Button class="btn btn-orange-large d-block w-100" type="submit">Login</Button> -->
                               <a href="Main_page.php" class="btn btn-orange-large d-block w-100" >Login</a>
                            </div>
                            <div class="text-center">
                                <span class="d-flex d-small-block text-center justify-content-center font-18 color-70 font-medium">
                                    Don't Have an Account? <a href="Signup.php" class="nav-link p-0 ml-2 color-3b font-medium">New Customer</a> 
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->

    <?php  
        include("Common/footer.php");
    ?>
    
    <!--  -->

    <?php  
        include("Common/Bottom_form.php");
    ?>
    
    <!--  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>