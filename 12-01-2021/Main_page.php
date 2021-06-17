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

    <section class="Main-Section-1">
        <div class="container">
            <div class="Main-Section-1-data">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 lg-mb-4">
                        <div class="pos-relative">
                            <div class="sidebar side-sticky small">
                                <ul class="nav nav-pills" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active font-medium" id="Dashboard-tab" data-toggle="tab"
                                            href="#Dashboard" role="tab" aria-controls="Dashboard" aria-selected="true">
                                            <div class="sidebar-icon">
                                                <img src="image/Dashboard.svg" class="img-fluid">
                                            </div>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-medium" id="Orders-tab" data-toggle="tab" href="#Orders"
                                            role="tab" aria-controls="Orders" aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Orders.svg" class="img-fluid">
                                            </div>
                                            Orders
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-medium" id="Membership-tab" data-toggle="tab"
                                            href="#Membership" role="tab" aria-controls="Membership"
                                            aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Membership.svg" class="img-fluid">
                                            </div>
                                            Membership
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-medium" id="Appointments-tab" data-toggle="tab"
                                            href="#Appointments" role="tab" aria-controls="Appointments"
                                            aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Appointments.svg" class="img-fluid">
                                            </div>
                                            Appointments
                                        </a>
                                    </li>
                                    <li class="nav-item font-medium">
                                        <a class="nav-link" id="Coupons-tab" data-toggle="tab" href="#Coupons"
                                            role="tab" aria-controls="Coupons" aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Coupons.svg" class="img-fluid">
                                            </div>
                                            Coupons
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-medium" id="Addresses-tab" data-toggle="tab"
                                            href="#Addresses" role="tab" aria-controls="Addresses"
                                            aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Addresses.svg" class="img-fluid">
                                            </div>
                                            Addresses
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-medium" id="Kids-tab" data-toggle="tab" href="#Kids" role="tab" aria-controls="Kids" aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Kids_2img.svg" class="img-fluid">
                                            </div>
                                            Kids
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-medium" id="Account-tab" data-toggle="tab"
                                            href="#Account" role="tab" aria-controls="Account" aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Account-details.svg" class="img-fluid">
                                            </div>
                                            Account details
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-medium" id="Password-tab" data-toggle="tab"
                                            href="#Password" role="tab" aria-controls="Password" aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Password.svg" class="img-fluid">
                                            </div>
                                            Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-medium" id="Logout-tab" data-toggle="tab" href="#Logout"
                                            role="tab" aria-controls="Logout" aria-selected="false">
                                            <div class="sidebar-icon">
                                                <img src="image/Logout.svg" class="img-fluid">
                                            </div>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-lg-none d-block mb-3 text-right">
                        <a href="#" class="gray-small-button font-medium" id="toggle_sidebar">Sidebar</a>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Dashboard" role="tabpanel"
                                    aria-labelledby="Dashboard-tab">
                                    <div class="shadow">
                                        <div class="pad-30">
                                            <h2 class="font-20 font-bold color-3b mb-0">Dashboard</h2>
                                            <img src="image/title-bottom-image.png" class="img-fluid">
                                            <div class="bottom-data pt-2">
                                                <h3 class="font-18 font-medium color-3b">Hello, <span
                                                        class="font-bold">Jhon Smith</span> (If Not <span
                                                        class="font-bold">Smith</span> !Logout)</h3>
                                                <p class="font-16 font-medium color-3b">From your account dashboard. you
                                                    can easily check & view your recent orders, manage your shipping and
                                                    billing addresses and edit your password and account details.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Orders" role="tabpanel" aria-labelledby="Orders-tab">
                                    <div class="main-order">
                                        <div class="shadow">
                                            <div class="pad-30">
                                                <h2 class="font-20 font-bold color-3b mb-0">Recent Orders</h2>
                                                <img src="image/title-bottom-image.png" class="img-fluid mb-20">
                                                <div class="thead-back-table">
                                                    <div class="table-responsive-lg">
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="uppercase text-center">NUMBER</th>
                                                                    <th class="uppercase text-center">DATE</th>
                                                                    <th class="uppercase text-center">STATUS</th>
                                                                    <th class="uppercase text-center">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <span class="order_details">#148556</span>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Oct 19, 2020</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Completed</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">$315.00 for 1 item</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <span class="order_details">#148556</span>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Oct 19, 2020</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Completed</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">$315.00 for 1 item</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <span class="order_details">#148556</span>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Oct 19, 2020</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Completed</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">$315.00 for 1 item</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <span class="order_details">#148556</span>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Oct 19, 2020</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Completed</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">$315.00 for 1 item</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <span class="order_details">#148556</span>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Oct 19, 2020</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Completed</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">$315.00 for 1 item</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="order-details d-none">
                                        <div class="shadow mb-30">
                                            <div class="pad-30">
                                                <div
                                                    class="d-flex d-small-block justify-content-between align-items-center">
                                                    <h2 class="font-20 font-bold color-3b mb-0 sm-mb-2">#148556</h2>
                                                    <a href="#" id="back_order"
                                                        class="gray-small-button font-medium">Back to list</a>
                                                </div>
                                                <img src="image/title-bottom-image.png" class="img-fluid">
                                                <p class="font-16 color-3b font-medium">was placed on September 7, 2020
                                                    and is currently Completed.</p>
                                            </div>

                                            <div class="first-order-details">
                                                <div class="table-responsive-lg pb-3">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th>Product</th>
                                                                <th>Payment method:</th>
                                                                <th class="text-t">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td valign="top" align="center" class="">
                                                                    <img src="image/cart-product-1.png"
                                                                        class="img-fluid">
                                                                </td>
                                                                <td valign="middle" align="left">
                                                                    <a href="#">ACT Netball Camp, Acton</a>
                                                                    <p>Name: darsh bhavsar</p>
                                                                    <p>Date of Birth: 13/03/2010</p>
                                                                    <p>Gender: Boy</p>
                                                                </td>
                                                                <td valign="middle" align="left">
                                                                    <p class="main-price">Credit card</p>
                                                                </td>
                                                                <td valign="middle" align="left">
                                                                    <p class="total-price">$315.00</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="top" align="center" class="">
                                                                    <img src="image/cart-product-1.png"
                                                                        class="img-fluid">
                                                                </td>
                                                                <td valign="middle" align="left">
                                                                    <a href="#">ACT Netball Camp, Acton</a>
                                                                    <p>Name: darsh bhavsar</p>
                                                                    <p>Date of Birth: 13/03/2010</p>
                                                                    <p>Gender: Boy</p>
                                                                </td>
                                                                <td valign="middle" align="left">
                                                                    <p class="main-price">Credit card</p>
                                                                </td>
                                                                <td valign="middle" align="left">
                                                                    <p class="total-price">$315.00</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td align="left" colspan="3">Subtotal</td>
                                                                <td align="left" colspan="2"><span>$630.00</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" colspan="3">Discount<span
                                                                        class="ml-2">($47.5 x 2)</span></td>
                                                                <td align="left" colspan="2"><span>-$94.05</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" colspan="3" class="color-blue">Total
                                                                </td>
                                                                <td align="left" colspan="2"><span
                                                                        class="color-blue">$565.05</span></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 lg-mb-4">
                                                <div class="shadow">
                                                    <div class="pad-25">
                                                        <h2 class="font-20 font-bold color-3b mb-0 sm-mb-2">Billing
                                                            Address</h2>
                                                        <img src="image/title-bottom-image.png" class="img-fluid">
                                                        <h4 class="font-16 font-bold color-3b">John Smith</h4>
                                                        <p class="font-16 font-medium color-70">Random
                                                            Federation<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178
                                                        </p>
                                                        <div>
                                                            <span class="d-block color-70 font-14 font-medium">Phone
                                                                Number</span>
                                                            <p class="font-16 font-medium color-3b">38 972 588-42-36</p>
                                                        </div>
                                                        <div class="mb-0">
                                                            <span class="d-block color-70 font-14 font-medium">Email
                                                                Address</span>
                                                            <p class="font-16 font-medium color-3b mb-0">
                                                                johnsmith@example.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <div class="shadow">
                                                    <div class="pad-25">
                                                        <h2 class="font-20 font-bold color-3b mb-0 sm-mb-2">Shipping
                                                            Address</h2>
                                                        <img src="image/title-bottom-image.png" class="img-fluid">
                                                        <h4 class="font-16 font-bold color-3b">John Smith</h4>
                                                        <p class="font-16 font-medium color-70">Random
                                                            Federation<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178
                                                        </p>
                                                        <div>
                                                            <span class="d-block color-70 font-14 font-medium">Phone
                                                                Number</span>
                                                            <p class="font-16 font-medium color-3b">38 972 588-42-36</p>
                                                        </div>
                                                        <div class="mb-0">
                                                            <span class="d-block color-70 font-14 font-medium">Email
                                                                Address</span>
                                                            <p class="font-16 font-medium color-3b mb-0">
                                                                johnsmith@example.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--order-->
                                <div class="tab-pane fade" id="Membership" role="tabpanel"
                                    aria-labelledby="Membership-tab">
                                    <div class="shadow">
                                        <div class="pad-30">
                                            <h3 class="font-18 font-medium color-3b mb-0">You have not purchased any
                                                memberships.</h3>
                                        </div>
                                    </div>
                                </div><!--membership-->
                                <div class="tab-pane fade" id="Appointments" role="tabpanel"
                                    aria-labelledby="Appointments-tab">
                                    <div class="shadow">
                                        <div class="pad-30">
                                            <h3 class="font-18 font-medium color-3b mb-20">No appointments scheduled
                                                yet.</h3>
                                            <a class="btn btn-orange mb-0" href="#">
                                                Save
                                            </a>
                                        </div>
                                    </div>
                                </div><!--aapointment-->
                                <div class="tab-pane fade" id="Coupons" role="tabpanel" aria-labelledby="Coupons-tab">
                                    <div class="shadow">
                                        <div class="pad-30">
                                            <h3 class="font-18 font-medium color-3b mb-0">Sorry, No coupons available
                                                for you.</h3>
                                        </div>
                                    </div>
                                </div><!--coupans-->
                                <div class="tab-pane fade" id="Addresses" role="tabpanel" aria-labelledby="Addresses-tab">
                                    <div class="main-address">
                                        <div class="shadow">
                                            <div class="pad-30">
                                                <div class="d-flex d-small-block justify-content-between align-items-center">
                                                    <h2 class="font-20 font-bold color-3b mb-0 sm-mb-2">Billing Address
                                                    </h2>
                                                    <a href="#" class="gray-small-button font-medium" id="add_new">Add
                                                        New</a>
                                                </div>
                                                <img src="image/title-bottom-image.png" class="img-fluid">
                                                <h4 class="font-16 font-bold color-3b">John Smith</h4>
                                                <p class="font-16 font-medium color-70">Random Federation<br>115302,
                                                    Moscow<br>ul. Varshavskaya, 15-2-178</p>
                                                <div>
                                                    <span class="d-block color-70 font-14 font-medium">Phone
                                                        Number</span>
                                                    <p class="font-16 font-medium color-3b">38 972 588-42-36</p>
                                                </div>
                                                <div class="mb-30">
                                                    <span class="d-block color-70 font-14 font-medium">Email
                                                        Address</span>
                                                    <p class="font-16 font-medium color-3b">johnsmith@example.com</p>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#" class="gray-border-button font-medium mr-1">Edit
                                                        Address</a>
                                                    <a href="#" class="transparent-button font-medium">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="New-address d-none">
                                        <div class="shadow">
                                            <div class="pad-30">
                                                <div class="d-flex d-small-block justify-content-between align-items-center mb-2">
                                                    <h2 class="font-20 font-bold color-3b mb-0 sm-mb-2">New Address</h2>
                                                    <a href="#" id="new_back"
                                                        class="gray-small-button font-medium">Back</a>
                                                </div>
                                                <img src="image/title-bottom-image.png" class="img-fluid mb-20">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">First Name*</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Last Name*</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Email address*</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="Enter email id">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Mobile*</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="04xxxxxxxx">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Phone (optional)</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="04xxxxxxxx">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Street address *</label>
                                                                <input type="text" class="mb-3 master form-control"
                                                                    placeholder="House number and street name">
                                                                <input type="text" class="mb-1 master form-control"
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
                                                        <div class="col-xl-6 col-lg-6 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Suburb *</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="Enter suburb">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">State *</label>
                                                                <select class="mb-1 master form-control">
                                                                    <option>Select an option</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Postcode</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="Enter Postcode">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="custom blue-border mb-0">Set as my default
                                                                    address
                                                                    <input type="checkbox" checked="checked">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-0">
                                                            <button type="button" class="btn btn-orange mb-0 mr-3">
                                                                Save
                                                            </button>
                                                            </Col>
                                                        </div>
                                                     </div>   
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div><!--address-->

                                <div class="tab-pane fade" id="Kids" role="tabpanel" aria-labelledby="Kids-tab">
                                    <div class="main-kids">
                                        <div class="shadow">
                                            <div class="pad-30">
                                                <h2 class="font-20 font-bold color-3b mb-0">Kids</h2>
                                                <img src="image/title-bottom-image.png" class="img-fluid mb-20">
                                                <div class="thead-back-table">
                                                    <div class="table-responsive-lg">
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="uppercase text-center">Sr. No.</th>
                                                                    <th class="uppercase text-center">Name</th>
                                                                    <th class="uppercase text-center">Date of Birth</th>
                                                                    <th class="uppercase text-center">School grade</th>
                                                                    <th class="uppercase text-center">Playing experience</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <span class="kids_id">#1</span>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Oliver</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">10/05/2014</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">1</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Beginner</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <span class="kids_id">#2</span>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Amelia</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">05/01/2010</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">3</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Moderator</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <span class="kids_id">#3</span>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Jack</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">26/11/2000</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">5</p>
                                                                    </td>
                                                                    <td valign="middle" align="center">
                                                                        <p class="">Accomplished</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="kids_details d-none">
                                        <div class="shadow mb-30">
                                            <div class="pad-30">
                                                <div
                                                    class="d-flex d-small-block justify-content-between align-items-center">
                                                    <h2 class="font-20 font-bold color-3b mb-0 sm-mb-2">Oliver</h2>
                                                    <a href="#" id="back_kids" class="gray-small-button font-medium">Back to list</a>
                                                </div>
                                                <img src="image/title-bottom-image.png" class="img-fluid">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">First Name*</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="John">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Last Name*</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="smith">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Display Name*</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="">
                                                                <span class="font-15 color-70 font-regular">This will be how
                                                                    your name will be displayed in the account section and in
                                                                    reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-0">
                                                            <div class="form-group mb-20">
                                                                <label class="master-label">Email address*</label>
                                                                <input type="text" class="mb-1 master form-control"
                                                                    placeholder="johnsmith@gmail.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 mb-0">
                                                            <button type="button" class="btn-sm btn-orange mb-0">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <div class="tab-pane fade" id="Account" role="tabpanel" aria-labelledby="Account-tab">
                                <div class="shadow">
                                    <div class="pad-30">
                                        <h2 class="font-20 font-bold color-3b mb-0">Account</h2>
                                        <img src="image/title-bottom-image.png" class="img-fluid mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 mb-0">
                                                    <div class="form-group mb-20">
                                                        <label class="master-label">First Name*</label>
                                                        <input type="text" class="mb-1 master form-control"
                                                            placeholder="John">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 mb-0">
                                                    <div class="form-group mb-20">
                                                        <label class="master-label">Last Name*</label>
                                                        <input type="text" class="mb-1 master form-control"
                                                            placeholder="smith">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-0">
                                                    <div class="form-group mb-20">
                                                        <label class="master-label">Display Name*</label>
                                                        <input type="text" class="mb-1 master form-control"
                                                            placeholder="">
                                                        <span class="font-15 color-70 font-regular">This will be how
                                                            your name will be displayed in the account section and in
                                                            reviews</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-0">
                                                    <div class="form-group mb-20">
                                                        <label class="master-label">Email address*</label>
                                                        <input type="text" class="mb-1 master form-control"
                                                            placeholder="johnsmith@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-0">
                                                    <button type="button" class="btn-sm btn-orange mb-0">
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Password" role="tabpanel" aria-labelledby="Password-tab">
                                <div class="shadow">
                                    <div class="pad-30">
                                        <h2 class="font-20 font-bold color-3b mb-0">Change Password</h2>
                                        <img src="image/title-bottom-image.png" class="img-fluid mb-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-xl-12 mb-0">
                                                    <div class="form-group mb-20">
                                                        <label class="master-label">Current Password</label>
                                                        <input type="text" class="mb-1 master form-control"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-0">
                                                    <div class="form-group mb-20">
                                                        <label class="master-label">New Password</label>
                                                        <input type="text" class="mb-1 master form-control"
                                                            placeholder="johnsmith@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-0">
                                                    <div class="form-group mb-20">
                                                        <label class="master-label">Repeat Password</label>
                                                        <input type="text" class="mb-1 master form-control"
                                                            placeholder="johnsmith@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 mb-0">
                                                    <button type="button" class="btn-sm btn-orange mb-0">
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Logout" role="tabpanel" aria-labelledby="Logout-tab">

                            </div>
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