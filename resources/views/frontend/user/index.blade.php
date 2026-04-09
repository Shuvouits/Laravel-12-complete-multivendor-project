
@extends('frontend.master')

@section('content')

 <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-70 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#dashboard" role="tab" aria-controls="dashboard"
                                                aria-selected="false"><i
                                                    class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders"
                                                role="tab" aria-controls="orders" aria-selected="false"><i
                                                    class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#track-orders" role="tab" aria-controls="track-orders"
                                                aria-selected="false"><i
                                                    class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab"
                                                href="#address" role="tab" aria-controls="address"
                                                aria-selected="true"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                                href="#account-detail" role="tab" aria-controls="account-detail"
                                                aria-selected="true"><i class="fi-rs-user mr-10"></i>Account
                                                details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="wishlist-detail-tab" data-bs-toggle="tab"
                                                href="#wishlist-tab" role="tab" aria-controls="wishlist-tab"
                                                aria-selected="true"><i class="fi-rs-heart mr-10"></i> Wishlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.html"><i
                                                    class="fi-rs-sign-out mr-10"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content account dashboard-content pl-50">
                                    <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header p-0 pb-10">
                                                <h3 class="mb-0">Hello Rosie!</h3>
                                            </div>
                                            <div class="card-body p-0">
                                                <p>
                                                    From your account dashboard. you can easily check &amp; view your <a
                                                        href="#">recent orders</a>,<br />
                                                    manage your <a href="#">shipping and billing addresses</a>
                                                    and <a href="#">edit your password and account details.</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="dashboard_card blue">
                                                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                                                    <h3>27</h3>
                                                    <p>Total Order</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="dashboard_card red">
                                                    <span><i class="fa-solid fa-xmark"></i></span>
                                                    <h3>24</h3>
                                                    <p>Cancel Order</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="dashboard_card orange">
                                                    <span><i class="fa-solid fa-spinner"></i></span>
                                                    <h3>30</h3>
                                                    <p>Pending Order</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="dashboard_card green">
                                                    <span><i class="fi-rs-shopping-bag"></i></span>
                                                    <h3>30</h3>
                                                    <p>Total Order</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="dashboard_card pink">
                                                    <span><i class="fi-rs-shopping-bag"></i></span>
                                                    <h3>30</h3>
                                                    <p>Total Order</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="dashboard_card purple">
                                                    <span><i class="fi-rs-shopping-bag"></i></span>
                                                    <h3>30</h3>
                                                    <p>Total Order</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header p-0">
                                                <h3 class="mb-0">Your Orders</h3>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="order_table table m-0 mt-20">
                                                        <thead>
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>#1357</td>
                                                                <td>March 45, 2020</td>
                                                                <td><span class="text-warning">Pending</span></td>
                                                                <td>$125.00 for 2 item</td>
                                                                <td><a href="dashboard_order_details.html"
                                                                        class="btn-small d-block">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>#2468</td>
                                                                <td>June 29, 2020</td>
                                                                <td><span class="text-danger">Cancel</span></td>
                                                                <td>$364.00 for 5 item</td>
                                                                <td><a href="dashboard_order_details.html"
                                                                        class="btn-small d-block">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>#2366</td>
                                                                <td>August 02, 2020</td>
                                                                <td><span class="text-primary">Completed</span></td>
                                                                <td>$280.00 for 3 item</td>
                                                                <td><a href="dashboard_order_details.html"
                                                                        class="btn-small d-block">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>#1357</td>
                                                                <td>March 45, 2020</td>
                                                                <td><span class="text-warning">Processing</span></td>
                                                                <td>$125.00 for 2 item</td>
                                                                <td><a href="dashboard_order_details.html"
                                                                        class="btn-small d-block">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="track-orders" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header p-0">
                                                <h3 class="mb-0">Orders tracking</h3>
                                            </div>
                                            <div class="card-body p-0 contact-from-area">
                                                <p>To track your order please enter your OrderID in the box below and
                                                    press "Track" button. This was given to you on your receipt and in
                                                    the confirmation email you should have received.</p>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <form class="contact-form-style mt-30 mb-50" action="#"
                                                            method="post">
                                                            <div class="input-style mb-20">
                                                                <label>Order ID</label>
                                                                <input name="order-id"
                                                                    placeholder="Found in your order confirmation email"
                                                                    type="text" />
                                                            </div>
                                                            <div class="input-style mb-20">
                                                                <label>Billing email</label>
                                                                <input name="billing-email"
                                                                    placeholder="Email you used during checkout"
                                                                    type="email" />
                                                            </div>
                                                            <button class="btn" type="submit">Track</button>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="wsus__track_header">
                                                            <div class="wsus__track_header_text">
                                                                <div class="row">
                                                                    <div class="col-xl-3 col-sm-6 col-lg-3">
                                                                        <div class="wsus__track_header_single">
                                                                            <h5>estimated delivery time:</h5>
                                                                            <p>20 nov 2021</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-sm-6 col-lg-3">
                                                                        <div class="wsus__track_header_single">
                                                                            <h5>shopping by:</h5>
                                                                            <p>one shop</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-sm-6 col-lg-3">
                                                                        <div class="wsus__track_header_single">
                                                                            <h5>status:</h5>
                                                                            <p>order Processing</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-sm-6 col-lg-3">
                                                                        <div class="wsus__track_header_single">
                                                                            <h5>tracking:</h5>
                                                                            <p>BD096547155HGU</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <ul class="pro_trckr">
                                                            <li class="check_mark">Order pending</li>
                                                            <li class="">order Processing</li>
                                                            <li class="">on the way</li>
                                                            <li class="red_mark">ready for delivery</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="col-12">
                                                            <div class="track_pro_table">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="img">Product</th>
                                                                                <th class="description"></th>
                                                                                <th class="price">price</th>
                                                                                <th class="discount">Quantity</th>
                                                                                <th class="total">Total</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="img"><a
                                                                                        href="#"><img
                                                                                            class="img"
                                                                                            src="assets/imgs/shop/thumbnail-1.jpg"
                                                                                            alt=""></a></td>
                                                                                <td class="description">
                                                                                    <h3><a href="#">NFTMAX- NFT
                                                                                            React
                                                                                            Admin & Dashboard
                                                                                            Template</a></h3>
                                                                                    <p>Item by WSUS</p>
                                                                                </td>
                                                                                <td class="price">
                                                                                    <p>$30.00</p>
                                                                                </td>
                                                                                <td class="discount">
                                                                                    <p>02</p>
                                                                                </td>
                                                                                <td class="total">
                                                                                    <p>$30.00</p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="img"><a
                                                                                        href="#"><img
                                                                                            class="img"
                                                                                            src="assets/imgs/shop/thumbnail-2.jpg"
                                                                                            alt=""></a></td>
                                                                                <td class="description">
                                                                                    <h3><a href="#">Oifolio -
                                                                                            Digital
                                                                                            Marketing Agency Theme</a>
                                                                                    </h3>
                                                                                    <p>Item by WSUS</p>
                                                                                </td>
                                                                                <td class="price">
                                                                                    <p>$40.00</p>
                                                                                </td>
                                                                                <td class="discount">
                                                                                    <p>03</p>
                                                                                </td>
                                                                                <td class="total">
                                                                                    <p>$28.93</p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="img"><a
                                                                                        href="#"><img
                                                                                            class="img"
                                                                                            src="assets/imgs/shop/thumbnail-3.jpg"
                                                                                            alt=""></a></td>
                                                                                <td class="description">
                                                                                    <h3><a href="#">Binduz -
                                                                                            WordPress
                                                                                            Newspaper News and
                                                                                            Magazine</a></h3>
                                                                                    <p>Item by WSUS</p>
                                                                                </td>
                                                                                <td class="price">
                                                                                    <p>$99.00</p>
                                                                                </td>
                                                                                <td class="discount">
                                                                                    <p>05</p>
                                                                                </td>
                                                                                <td class="total">
                                                                                    <p>$28.93</p>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="address" role="tabpanel"
                                        aria-labelledby="address-tab">
                                        <div class="wsus__shipping_address mb_40">
                                            <h4>Billing Address
                                                <a href="dashboard_address_edit.html">add new address</a>
                                            </h4>

                                            <div class="row">
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <div class="wsus__shipping_address_item">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">98 Winn
                                                                St, Woburn, MA
                                                                01801,USA</label>
                                                        </div>
                                                        <div class="wsus__shipping_mail_address">
                                                            <a href="mailto:example@gmail.com">example@gmail.com</a>
                                                            <a href="callto:+(402)76328246">+(402) 763 282 46</a>
                                                        </div>
                                                        <ul class="btn_list">
                                                            <li>
                                                                <a href="dashboard_address_edit.html">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <div class="wsus__shipping_address_item">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">98 Winn
                                                                St, Woburn, MA 01801,
                                                                USA</label>
                                                        </div>
                                                        <div class="wsus__shipping_mail_address">
                                                            <a href="mailto:example@gmail.com">example@gmail.com</a>
                                                            <a href="callto:+(402)76328246">+(402) 763 282 46</a>
                                                        </div>
                                                        <ul class="btn_list">
                                                            <li>
                                                                <a href="dashboard_address_edit.html">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <div class="wsus__shipping_address_item">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio3"
                                                                value="option3">
                                                            <label class="form-check-label" for="inlineRadio3">98 Winn
                                                                St, Woburn, MA 01801,
                                                                USA</label>
                                                        </div>
                                                        <div class="wsus__shipping_mail_address">
                                                            <a href="mailto:example@gmail.com">example@gmail.com</a>
                                                            <a href="callto:+(402)76328246">+(402) 763 282 46</a>
                                                        </div>
                                                        <ul class="btn_list">
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-collapse collapse login_form" id="loginform">
                                                <div class="panel-body">
                                                    <h4>Add New Address</h4>
                                                    <form>
                                                        <div class="row mt-20">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Name ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Phone ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea placeholder="Address" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <button class="btn btn-md" name="login">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-detail" role="tabpanel"
                                        aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header p-0">
                                                <h5>Account Details</h5>
                                            </div>
                                            <div class="card-body p-0">
                                                <p>Already have an account? <a href="page-login.html">Log in
                                                        instead!</a></p>
                                                <form method="post" name="enq">
                                                    <div class="row mt-30">
                                                        <div class="form-group col-md-6">
                                                            <label>First Name <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="name"
                                                                type="text" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Last Name <span class="required">*</span></label>
                                                            <input required="" class="form-control"
                                                                name="phone" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Display Name <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="dname"
                                                                type="text" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Email Address <span
                                                                    class="required">*</span></label>
                                                            <input required="" class="form-control" name="email"
                                                                type="email" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Current Password <span
                                                                    class="required">*</span></label>
                                                            <input required="" class="form-control"
                                                                name="password" type="password" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>New Password <span class="required">*</span></label>
                                                            <input required="" class="form-control"
                                                                name="npassword" type="password" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Confirm Password <span
                                                                    class="required">*</span></label>
                                                            <input required="" class="form-control"
                                                                name="cpassword" type="password" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Select Box <span class="required">*</span></label>
                                                            <select class="select-active">
                                                                <option value="#">656566</option>
                                                                <option value="#">656566</option>
                                                                <option value="#">656566</option>
                                                                <option value="#">656566</option>
                                                                <option value="#">656566</option>
                                                                <option value="#">656566</option>
                                                                <option value="#">656566</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Message <span class="required">*</span></label>
                                                            <textarea rows="6" class="form-control" placeholder="Message"></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit"
                                                                class="btn btn-fill-out submit font-weight-bold"
                                                                name="submit" value="Submit">Save Change</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="wishlist-tab" role="tabpanel"
                                        aria-labelledby="wishlist-detail-tab">
                                        <div class="card">
                                            <div class="card-header p-0">
                                                <h4>Wishlist</h4>
                                            </div>
                                            <div class="card-body p-0 mt-20">
                                                <div class="table-responsive shopping-summery">
                                                    <table class="table table-wishlist mb-0">
                                                        <thead>
                                                            <tr class="main-heading">
                                                                <th class="custome-checkbox start pl-30">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="exampleCheckbox11"
                                                                        value="">
                                                                    <label class="form-check-label"
                                                                        for="exampleCheckbox11"></label>
                                                                </th>
                                                                <th scope="col" colspan="2">Product</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Stock Status</th>
                                                                <th scope="col">Action</th>
                                                                <th scope="col" class="end">Remove</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="pt-30">
                                                                <td class="custome-checkbox pl-30">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="exampleCheckbox1"
                                                                        value="">
                                                                    <label class="form-check-label"
                                                                        for="exampleCheckbox1"></label>
                                                                </td>
                                                                <td class="image product-thumbnail pt-40"><img
                                                                        src="assets/imgs/shop/product-1-1.jpg"
                                                                        alt="#">
                                                                </td>
                                                                <td class="product-des product-name">
                                                                    <h6><a class="product-name mb-10"
                                                                            href="shop-product-right.html">Field Roast
                                                                            Chao Cheese Creamy Original</a></h6>
                                                                    <div class="product-rate-cover">
                                                                        <div class="product-rate d-inline-block">
                                                                            <div class="product-rating"
                                                                                style="width: 90%"></div>
                                                                        </div>
                                                                        <span class="font-small ml-5 text-muted">
                                                                            (4.0)</span>
                                                                    </div>
                                                                </td>
                                                                <td class="price" data-title="Price">
                                                                    <h3 class="text-brand">$2.51</h3>
                                                                </td>
                                                                <td class="text-center detail-info"
                                                                    data-title="Stock">
                                                                    <span class="stock-status in-stock mb-0"> In Stock
                                                                    </span>
                                                                </td>
                                                                <td class="text-right" data-title="Cart">
                                                                    <button class="btn btn-sm">Add to cart</button>
                                                                </td>
                                                                <td class="action text-center" data-title="Remove">
                                                                    <a href="#" class="text-body"><i
                                                                            class="fi-rs-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="custome-checkbox pl-30">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="exampleCheckbox2"
                                                                        value="">
                                                                    <label class="form-check-label"
                                                                        for="exampleCheckbox2"></label>
                                                                </td>
                                                                <td class="image product-thumbnail"><img
                                                                        src="assets/imgs/shop/product-2-1.jpg"
                                                                        alt="#">
                                                                </td>
                                                                <td class="product-des product-name">
                                                                    <h6><a class="product-name mb-10"
                                                                            href="shop-product-right.html">Blue Diamond
                                                                            Almonds Lightly Salted</a></h6>
                                                                    <div class="product-rate-cover">
                                                                        <div class="product-rate d-inline-block">
                                                                            <div class="product-rating"
                                                                                style="width: 90%"></div>
                                                                        </div>
                                                                        <span class="font-small ml-5 text-muted">
                                                                            (4.0)</span>
                                                                    </div>
                                                                </td>
                                                                <td class="price" data-title="Price">
                                                                    <h3 class="text-brand">$3.2</h3>
                                                                </td>
                                                                <td class="text-center detail-info"
                                                                    data-title="Stock">
                                                                    <span class="stock-status in-stock mb-0"> In Stock
                                                                    </span>
                                                                </td>
                                                                <td class="text-right" data-title="Cart">
                                                                    <button class="btn btn-sm">Add to cart</button>
                                                                </td>
                                                                <td class="action text-center" data-title="Remove">
                                                                    <a href="#" class="text-body"><i
                                                                            class="fi-rs-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="custome-checkbox pl-30">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="exampleCheckbox3"
                                                                        value="">
                                                                    <label class="form-check-label"
                                                                        for="exampleCheckbox3"></label>
                                                                </td>
                                                                <td class="image product-thumbnail"><img
                                                                        src="assets/imgs/shop/product-3-1.jpg"
                                                                        alt="#">
                                                                </td>
                                                                <td class="product-des product-name">
                                                                    <h6><a class="product-name mb-10"
                                                                            href="shop-product-right.html">Fresh
                                                                            Organic
                                                                            Mustard Leaves Bell Pepper</a></h6>
                                                                    <div class="product-rate-cover">
                                                                        <div class="product-rate d-inline-block">
                                                                            <div class="product-rating"
                                                                                style="width: 90%"></div>
                                                                        </div>
                                                                        <span class="font-small ml-5 text-muted">
                                                                            (4.0)</span>
                                                                    </div>
                                                                </td>
                                                                <td class="price" data-title="Price">
                                                                    <h3 class="text-brand">$2.43</h3>
                                                                </td>
                                                                <td class="text-center detail-info"
                                                                    data-title="Stock">
                                                                    <span class="stock-status in-stock mb-0"> In Stock
                                                                    </span>
                                                                </td>
                                                                <td class="text-right" data-title="Cart">
                                                                    <button class="btn btn-sm">Add to cart</button>
                                                                </td>
                                                                <td class="action text-center" data-title="Remove">
                                                                    <a href="#" class="text-body"><i
                                                                            class="fi-rs-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="custome-checkbox pl-30">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="exampleCheckbox4"
                                                                        value="">
                                                                    <label class="form-check-label"
                                                                        for="exampleCheckbox4"></label>
                                                                </td>
                                                                <td class="image product-thumbnail"><img
                                                                        src="assets/imgs/shop/product-4-1.jpg"
                                                                        alt="#">
                                                                </td>
                                                                <td class="product-des product-name">
                                                                    <h6><a class="product-name mb-10"
                                                                            href="shop-product-right.html">Angie’s
                                                                            Boomchickapop Sweet &amp; Salty </a></h6>
                                                                    <div class="product-rate-cover">
                                                                        <div class="product-rate d-inline-block">
                                                                            <div class="product-rating"
                                                                                style="width: 90%"></div>
                                                                        </div>
                                                                        <span class="font-small ml-5 text-muted">
                                                                            (4.0)</span>
                                                                    </div>
                                                                </td>
                                                                <td class="price" data-title="Price">
                                                                    <h3 class="text-brand">$3.21</h3>
                                                                </td>
                                                                <td class="text-center detail-info"
                                                                    data-title="Stock">
                                                                    <span class="stock-status out-stock mb-0"> Out
                                                                        Stock
                                                                    </span>
                                                                </td>
                                                                <td class="text-right" data-title="Cart">
                                                                    <button class="btn btn-sm btn-secondary">Contact
                                                                        Us</button>
                                                                </td>
                                                                <td class="action text-center" data-title="Remove">
                                                                    <a href="#" class="text-body"><i
                                                                            class="fi-rs-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="custome-checkbox pl-30">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="checkbox" id="exampleCheckbox5"
                                                                        value="">
                                                                    <label class="form-check-label"
                                                                        for="exampleCheckbox5"></label>
                                                                </td>
                                                                <td class="image product-thumbnail"><img
                                                                        src="assets/imgs/shop/product-5-1.jpg"
                                                                        alt="#">
                                                                </td>
                                                                <td class="product-des product-name">
                                                                    <h6><a class="product-name mb-10"
                                                                            href="shop-product-right.html">Foster
                                                                            Farms
                                                                            Takeout Crispy Classic</a></h6>
                                                                    <div class="product-rate-cover">
                                                                        <div class="product-rate d-inline-block">
                                                                            <div class="product-rating"
                                                                                style="width: 90%"></div>
                                                                        </div>
                                                                        <span class="font-small ml-5 text-muted">
                                                                            (4.0)</span>
                                                                    </div>
                                                                </td>
                                                                <td class="price" data-title="Price">
                                                                    <h3 class="text-brand">$3.17</h3>
                                                                </td>
                                                                <td class="text-center detail-info"
                                                                    data-title="Stock">
                                                                    <span class="stock-status in-stock mb-0"> In Stock
                                                                    </span>
                                                                </td>
                                                                <td class="text-right" data-title="Cart">
                                                                    <button class="btn btn-sm">Add to cart</button>
                                                                </td>
                                                                <td class="action text-center" data-title="Remove">
                                                                    <a href="#" class="text-body"><i
                                                                            class="fi-rs-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
