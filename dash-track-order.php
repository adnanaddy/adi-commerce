<?php require_once 'inc/header.php' ?>

        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.php">Home</a></li>
                                    <li class="is-marked">

                                        <a href="dash-track-order.php">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="dash">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">

                                    <!--====== Dashboard Features ======-->
                                    <div class="dash__box dash__box--bg-grey dash__box--radius dash__box--border u-s-m-b-30">
                                        <div class="dash__pad-1">

                                            <span class="dash__text u-s-m-b-16">Hello, John Doe</span>
                                            <ul class="dash__f-list">
                                                <li>

                                                    <a href="dashboard.php">Manage My Account</a></li>
                                                <li>

                                                    <a href="dash-my-profile.php">My Profile</a></li>
                                                <li>

                                                    <a href="dash-address-book.php">Address Book</a></li>
                                                <li>

                                                    <a class="dash-active" href="dash-track-order.php">Track Order</a></li>
                                                <li>

                                                    <a href="dash-my-order.php">My Orders</a></li>
                                                <li>

                                                    <a href="dash-payment-option.php">My Payment Options</a></li>
                                                <li>

                                                    <a href="dash-cancellation.php">My Returns & Cancellations</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dash__box dash__box--bg-grey dash__box--radius dash__box--border dash__box--w">
                                        <div class="dash__pad-1">
                                            <ul class="dash__w-list">
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                                        <span class="dash__w-text">4</span>

                                                        <span class="dash__w-name">Orders Placed</span></div>
                                                </li>
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                                                        <span class="dash__w-text">0</span>

                                                        <span class="dash__w-name">Cancel Orders</span></div>
                                                </li>
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                                        <span class="dash__w-text">0</span>

                                                        <span class="dash__w-name">Wishlist</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--====== End - Dashboard Features ======-->
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div class="dash__box dash__box--radius dash__box--border u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Track your Order</h1>

                                            <span class="dash__text u-s-m-b-30">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</span>
                                            <form class="dash-track-order">
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="order-id">Order ID *</label>

                                                        <input class="input-text input-text--primary-style" type="text" id="order-id" placeholder="Found in your confirmation email"></div>
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="track-email">Email *</label>

                                                        <input class="input-text input-text--primary-style" type="text" id="track-email" placeholder="Email you used during checkout"></div>
                                                </div>

                                                <button class="btn btn--e-brand-b-2" type="submit">TRACK</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->


        <?php require_once 'inc/footer.php' ?>