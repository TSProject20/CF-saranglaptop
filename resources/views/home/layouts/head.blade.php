<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Suha - Multipurpose Ecommerce Mobile HTML Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="img/icons/icon-72x72.png">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lineicons.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">

    <style>
        .menu-active {
            color: #000000 !important;
            font-weight: bold;
        }
    </style>
</head>

<div class="page-content-wrapper pb-3">
    <!-- Vendor Details Wrap -->
    <div class="vendor-details-wrap bg-img bg-overlay py-4" style="background-image: url('img/bg-img/15.jpg')">
        <div class="container">
            <div class="d-flex align-items-start">
                <!-- Vendor Profile-->
                <div class="vendor-profile shadow me-3 mt-1">
                    <figure class="m-0"><img src="img/core-img/logo-small.png" alt=""></figure>
                </div>
                <!-- Vendor Info-->
                <div class="vendor-info">
                    <h5 class="vendor-title text-white">Suha</h5>
                    <p class="mb-1 text-white">
                        <svg class="bi bi-geo-alt me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                            </path>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                        </svg>Dhaka, Bangladesh
                    </p>

                </div>
            </div>
            <!-- Vendor Basic Info-->
        </div>
    </div>
    <!-- Vendor Tabs -->
    <div class="vendor-tabs">
        <div class="container">
            <ul class="nav nav-tabs mb-3" id="vendorTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ Request::is('/') ? 'menu-active' : '' }}" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"
                        href="/home">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button"
                        role="tab" aria-controls="products" aria-selected="false" href="/product">Products</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                        role="tab" aria-controls="reviews" aria-selected="false" href="/about">About</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                        type="button" role="tab" aria-controls="reviews" aria-selected="false"
                        href="/blog">Blog</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                        type="button" role="tab" aria-controls="reviews" aria-selected="false"
                        href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
