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

    <section class="thank-you-Section-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-8 lg-mb-8">
                    <div class="thank-you-data-one text-center">
                        <div class="thankyoumain_img"><img src="image/kids.png" alt=""></div>
                        <h2 class="font-bold color-blue uppercase">Thank you</h2>
                        <p class="font-20 font-medium">Your booking has been received, and you've been sent an email
                            with the program details.</p>
                        <p class="font-20 font-medium">HAPPY? LET YOUR FRIENDS KNOW!</p>
                        <div class="social-thanks-li mb-20">
                            <ul>
                                <li>
                                    <a class="nav-link p-0" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link p-0" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link p-0" href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link p-0" href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="text-center mb-30">
                            <button class="btn-orange-border" data-toggle="modal" data-target="#order_data"
                                type="button">Order Details</button>
                        </div>
                    </div>
                </div>
                <!--<div class="col-xl-6 col-lg-6">
                    <div class="thank-you-data-second ">
                        <h2 class="font-bold text-center">Save your details & get <span class="color-blue">10% off
                            </span>your next order</h2>
                        <div class="points-thanks-li mb-30">
                            <ul>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <img src="image/check-blue-icon.svg" class="img-fluid" alt="">
                                        <a href="#" class=""> Track or amend your order</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <img src="image/check-blue-icon.svg" class="img-fluid" alt="">
                                        <a href="#" class=""> Get exclusive offers and discounts</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-top">
                                        <img src="image/check-blue-icon.svg" class="img-fluid" alt="">
                                        <a href="#" class=""> Another benefit of creating an account</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <form>
                            <div class="form-group mb-0">
                                <label class="master-label font-bold mb-2">Choose a password:</label>
                                <div class="row align-items-center">
                                    <div class="col-sm-6 sm-mb-2">
                                        <input type="text" class="mb-0 master form-control bg-transparent"
                                            placeholder="">
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn-orange-large d-block w-100" type="submit">Save my
                                            details</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

    <!--  -->


    <!--  -->

    <section class="BottomForm">
        <div class="container">
            <Form>
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-12 lg-mb-2">
                        <Form.Label class="font-20 font-bold color-3b mb-0">
                            FIND A CAMP
                        </Form.Label>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 sm-mb-2">
                        <input type="text" class="mb-0 full form-control" id="inlineFormInput"
                            placeholder="Enter Suburb / Postcode" />
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 sm-mb-2">
                        <select defaultValue="Select Sport" class="mb-0 full form-control">
                            <option>Select Sport</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <Button type="button" class="uppercase btn-sm btn-orange mb-0">
                            Find Camps
                        </Button>
                    </div>
                </div>
            </Form>
        </div>
    </section>

    <!--  -->

    <?php  
        include("Common/footer.php");
    ?>


    <!-- Modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="order_data" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="p-0 title  modal-header">
                    <h2 class="text-center modal-title">Order Details</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="table-responsive-lg order-modal ">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th class="text-left">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Total</th>
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
                                        <p class="">11-12-2020</p>
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
                                        <p class="">11-12-2020</p>
                                    </td>
                                    <td valign="middle" align="center">
                                        <p class="total-price">$315.00</p>
                                    </td>
                                    <td valign="middle" align="center">
                                        <p class="cancel">x</p>
                                    </td>
                                </tr>  
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td align="left" colspan="5">Subtotal</td>
                                    <td align="right" colspan="2"><span>$630.00</span></td>
                                </tr>
                                <tr>
                                    <td align="left" colspan="5">Discount<span class="ml-2">($47.5 x 2)</span></td>
                                    <td align="right" colspan="2"><span>-$94.05</span></td>
                                </tr>
                                <tr>
                                    <td align="left" colspan="5" class="color-blue">Total</td>
                                    <td align="right" colspan="2"><span class="color-blue">$565.05</span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>