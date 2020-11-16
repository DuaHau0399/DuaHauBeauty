<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aesthetic | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    @include('admin.template.css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
   @include('admin.template.menu')
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   @include('admin.template.header')
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    @include('admin.template.tieude')
    <br>
    <!-- Breadcrumb Section End -->
    @yield('content')
    <!-- Services Section Begin -->
    @yield('detail')
    <!-- <section class="services-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-2">
                    <div class="services__details">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__details__title">
                                    <span>Facial procedures</span>
                                    <h3>Min Facelift</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__details__widget">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3>$ 159.50</h3>
                                </div>
                            </div>
                        </div>
                        <div class="services__details__pic">
                            <img src="{{ asset('admin_template') }}/img/services/services-details.jpg" alt="">
                        </div>
                        <div class="services__details__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis magnam aliquid. Cupiditate!</p>
                            <p>Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore excepturi quae
                            nisi, quisquam, maxime voluptates magnam aliquid.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="services__details__item__pic">
                                    <img src="{{ asset('admin_template') }}/img/services/sd-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="services__details__item__pic">
                                    <img src="{{ asset('admin_template') }}/img/services/sd-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="services__details__item__pic">
                                    <img src="{{ asset('admin_template') }}/img/services/sd-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="services__details__desc">
                            <p>Atque eum alias debitis suscipit, sint dignissimos minus quisquam recusandae nostrum quas
                                eligendi odit, fugiat eius rem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="services__details__feature">
                                        <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                        <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                        <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                        <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="services__details__feature">
                                        <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                        <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                        <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                        <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                                    </ul>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque eum alias debitis
                                suscipit, sint dignissimos minus quisquam recusandae nostrum quas eligendi odit, fugiat
                                eius rem. Cumque, labore placeat! Velit, vitae. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                   @include('admin.template.sidebar')
                   
                </div>
            </div>
        </div>
    </section> -->
    <!-- Services Section End -->

    <!-- Footer Section Begin -->
  
    <!-- Footer Section End -->

    <!-- Js Plugins -->
   @include('admin.template.js')
</body>

</html>