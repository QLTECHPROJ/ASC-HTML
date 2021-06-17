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
                        <li class="breadcrumb-item"><a href="#" class="nav-link p-0">Checkout</a></li>
                    </ol>
                </nav>
                <h2 class="heading-banner">Checkout</h2>
            </div>
        </div>
    </section>

    <!--  -->

    <section class="checkout-Section-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 lg-mb-4">
                    <div id="accordion">
                        <div class="card accordian-card p-0">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link uppercase" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="card-header-data">
                                            <div class="card-header-image">
                                                <img src="image/return-icon.png" class="img-fluid" width="30"
                                                    height="26" alt="">
                                            </div>
                                            <div class="card-header-content">
                                                Returning customer? Click here to login
                                            </div>
                                        </div>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="font-15 font-medium color-3b">
                                        If you have shopped with us before, please enter your details in the boxes
                                        below. If you are a new customer, please proceed to the Billing & Shipping
                                        section.
                                    </p>
                                    <form>
                                        <div class="form-group mb-3">
                                            <label class="master-label">Username or email *</label>
                                            <input type="text" class="mb-1 master form-control" placeholder="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="master-label">Password *</label>
                                            <input type="password" class="mb-1 master form-control" placeholder="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="custom black mb-3">Remember me
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                        <div class="text-left mb-0">
                                            <button class="btn-orange-large-border uppercase"
                                                type="submit">login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div id="accordion">
                        <div class="card accordian-card p-0">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link uppercase" data-toggle="collapse"
                                        data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                        <div class="card-header-data">
                                            <div class="card-header-image">
                                                <img src="image/tag-icon.png" class="img-fluid" width="28" height="28"
                                                    alt="">
                                            </div>
                                            <div class="card-header-content">
                                                Have a coupon? Click here
                                            </div>
                                        </div>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapsetwo" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="font-15 font-medium color-3b">
                                        If you have shopped with us before, please enter your details in the boxes
                                        below. If you are a new customer, please proceed to the Billing & Shipping
                                        section.
                                    </p>
                                    <form>
                                        <div class="form-group mb-0">
                                            <label class="master-label mb-2">Enter your coupon code if you have
                                                one.</label>
                                            <div class="d-inline-block w-100">
                                                <div class="first-input">
                                                    <input type="text" class="form-control master"
                                                        placeholder="Coupon code">
                                                </div>
                                                <div class="second-input">
                                                    <button class="btn-orange-large-border"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->

    <section class="checkout-Section-2">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-xl-7 col-lg-7 lg-mb-4">
                        <div class="checkout-Section-2-data">
                            <div class="digit-heading">
                                <div class="digit-number">1</div>
                                <div class="digit-text">Billing Details</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">First Name *</label>
                                        <input type="text" class="mb-1 master form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Last Name *</label>
                                        <input type="text" class="mb-1 master form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Email Address *</label>
                                        <input type="email" class="mb-1 master form-control"
                                            placeholder="Enter email id">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Mobile *</label>
                                        <input type="text" class="mb-1 master form-control" placeholder="04xxxxxxxx">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Phone (optional)</label>
                                        <input type="text" class="mb-1 master form-control" placeholder="04xxxxxxxx">
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Street address *</label>
                                        <input type="text" id="house" class="mb-3 master form-control"
                                            placeholder="House number and street name">
                                        <input type="text" id="appartment" class="mb-1 master form-control"
                                            placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Country *</label>
                                        <select class="mb-1 master form-control">
                                            <option>Country</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Suburb *</label>
                                        <input type="text" class="mb-1 master form-control" placeholder="Enter suburb">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">State *</label>
                                        <select class="mb-1 master form-control">
                                            <option>Country</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Postcode *</label>
                                        <input type="text" class="mb-1 master form-control"
                                            placeholder="Enter Postcode ">
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="custom blue-border mb-0">Create an account?
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">Create account password *</label>
                                        <input type="password" class="mb-3 master form-control" placeholder="Password">
                                        <!-- <p class="font-15 mb-1 font-regular">Very weak - Please enter a stronger
                                            password.</p> -->
                                        <p class="font-15 mb-0 font-regular">Hint: The password should be at least
                                            twelve characters long. To make it stronger, use upper and lower case
                                            letters, numbers, and symbols like ! " ? $ % ^ & ).</p>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="master-label">I learnt about the camp through...
                                            (optional)</label>
                                        <input type="text" class="mb-1 master form-control"
                                            placeholder="Please tell us how you found us ">
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-0">
                                        <label class="master-label">Booking Notes (optional)</label>
                                        <textarea class="mb-1 text-area master form-control"
                                            placeholder="Anything else you'd like us to know....." rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="checkout-Section-2-data">
                            <div class="digit-heading">
                                <div class="digit-number">2</div>
                                <div class="digit-text">Your order</div>
                            </div>
                            <div class="your-order-data mb-30">
                                <div class="table-responsive-lg first-table mb-0">
                                    <table class="table mb-0">
                                        <thead>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span>ACT Netball Camp, Acton × 1</span></td>
                                                <td><span>$267.75</span></td>
                                            </tr>
                                            <tr>
                                                <td><span>ACT Netball Camp, Acton × 1</span></td>
                                                <td><span>$267.75</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive-lg second-table mb-0">
                                    <table class="table mb-0">
                                        <thead>
                                            <th>Subtotal</th>
                                            <th><span>$630.00</span></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Express</td>
                                                <td><span>$30.00</span></td>
                                            </tr>
                                            <tr>
                                                <td>Discount<span class="ml-2">($47.5 x 2)</span></td>
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
                            </div>

                            <!--  -->


                            <div class="digit-heading">
                                <div class="digit-number">3</div>
                                <div class="digit-text">Billing Information</div>
                            </div>

                            <div class="billing-data mb-30">
                                <p class="font-15 mb-1 font-regular">Pay with your Visa, MasterCard or American Express
                                    via our secure online payment gateway.</p>

                                <div class="row mt-2">
                                    <div class="col-xl-12 mb-0">
                                        <div class="form-group mb-20">
                                            <div
                                                class="d-flex d-small-block justify-content-between align-items-center mb-1">
                                                <label class="master-label d-small-block">Card Holder Name *</label>
                                                <img src="image/debit-card.png" alt=""
                                                    class="img-fluid d-small-block sm-mb-1">
                                            </div>
                                            <input type="text" class="mb-1 master form-control"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-0">
                                        <div class="form-group mb-20">
                                            <label class="master-label">Card Number *</label>
                                            <input type="text" class="mb-1 master form-control"
                                                placeholder="1234 1234 1234 1234">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-0">
                                        <div class="form-group mb-20">
                                            <label class="master-label">Expiry Date *</label>
                                            <input type="text" class="mb-1 master form-control" placeholder="MM / YY">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-0">
                                        <div class="form-group mb-20">
                                            <label class="master-label">Card Code (CVC) *</label>
                                            <input type="text" class="mb-1 master form-control" placeholder="CVV">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="custom blue-border mb-0">I've read and accept the <a href="">
                                                Terms & Conditions</a> *
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <div class="form-group mb-20">
                                        <label class="custom blue-border mb-0"><span class=" truncate">I authorise for Australian Sports Camps to add me to Team App. Team App is 100% free and is a private platform for receiving information, updates and special offers for our camps. Team App has approximately 1.75 million users in Australia and is the largest free sports communication platform globally (optional).</span>
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-0">
                                    <!-- <button class="btn-orange-large d-block w-100" type="submit">Place Order</button> -->
                                    <a class="btn-orange-large btn d-block w-100" href="Thank_you.php">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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