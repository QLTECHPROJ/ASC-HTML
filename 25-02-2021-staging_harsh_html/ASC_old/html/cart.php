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
                <li class="breadcrumb-item"><a href="#" class="nav-link p-0">Cart</a></li>
                </ol>
            </nav>
            <h2 class="heading-banner">Cart</h2>
            </div>
        </div>
    </section>

    <!--  -->
    

    <section class="cart-Section-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="first-cart-details">
                        <div class="table-responsive-lg mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td valign="top" align="left" class="px-0">
                                            <img src="./image/cart-product-1.png" alt="" class="img-fluid">
                                        </td>
                                        <td valign="middle" align="left">
                                            <a href="#">ACT Netball Camp, Acton</a>
                                            <p>Name: darsh bhavsar</p>
                                            <p>Date of Birth: 13/03/2010</p>
                                            <p>Gender: Boy</p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <p class="cross-price">$315.00</p>
                                            <p class="main-price">$267.75</p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <p>1</p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <p class="total-price">$315.00</p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <p class="cancel">x</p>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td valign="top" align="left" class="px-0">
                                            <img src="./image/cart-product-1.png" alt="" class="img-fluid">
                                        </td>
                                        <td valign="middle" align="left">
                                            <a href="#">ACT Netball Camp, Acton</a>
                                            <p>Name: darsh bhavsar</p>
                                            <p>Date of Birth: 13/03/2010</p>
                                            <p>Gender: Boy</p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <p class="cross-price">$315.00</p>
                                            <p class="main-price">$267.75</p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <p>1</p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <p class="total-price">$315.00</p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <p class="cancel">x</p>
                                        </td>
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                        <form>
                            <div class="form-group mb-30">
                                <label class="master-label mb-2">Enter your coupon code if you have one.</label>
                                <div class="d-inline-block w-100">
                                    <div class="first-input">
                                        <input type="text" class="form-control master" placeholder="Coupon code">
                                    </div>
                                    <div class="second-input">
                                        <button class="btn-orange-large-border"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="second-cart-details">
                        <div class="table-responsive-lg mb-30">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td><span>$630.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Discount <span class="ml-2">($47.5 x 2)</span></td>
                                        <td><span>-$94.05</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Total</td>
                                        <td><span>$565.05</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="text-center mb-30">
                            <!-- <button class="btn-orange-large" type="submit">PROCEED TO CHECKOUT</button> -->
                            <a class="btn btn-orange-large" href="checkout.php">PROCEED TO CHECKOUT</a>
                        </div>
                        <div class="text-center mb-30">
                            <button class="btn-orange-large-border" type="submit">BOOK ANOTHER CHILD</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->

    <section class="cart-Section-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 lg-mb-4">
                    <div class="cart-section-2-data">
                        <div class="cart-section-2-img">
                            <img src="image/cart--icon-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="cart-section-2-content">
                            <h3 class="font-18 font-bold mb-1">SAFE PAYMENT</h3>
                            <p class="font-15 font-medium mb-0">We use Stripe to process payments. Stripe is certified as having me the most stringent level of certification available in the payments industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 lg-mb-4">
                    <div class="cart-section-2-data">
                        <div class="cart-section-2-img">
                            <img src="image/cart--icon-2.png" class="img-fluid" alt="">
                        </div>
                        <div class="cart-section-2-content">
                            <h3 class="font-18 font-bold mb-1">DELIVERY</h3>
                            <p class="font-15 font-medium mb-0">Our products are delivered online, this means that if your purchase a document you’ll have access to it almost instantly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="cart-section-2-data">
                        <div class="cart-section-2-img">
                            <img src="image/cart--icon-3.png" class="img-fluid" alt="">
                        </div>
                        <div class="cart-section-2-content">
                            <h3 class="font-18 font-bold mb-1">DELIVERY</h3>
                            <p class="font-15 font-medium mb-0">If you’re not satisfied with your product then let us know and we’ll do our best to rectify it or refund you.</p>
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