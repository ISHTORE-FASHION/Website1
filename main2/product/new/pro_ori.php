<?php 
include("Product.php");
include('security.php');
$product = new Product();
$categories = $product->getCategories();
$brands = $product->getBrand();
$materials = $product->getMaterial();
$productSizes = $product->getProductSize();
$totalRecords = $product->getTotalProducts();
?>
<link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
<link rel="stylesheet" type='text/css' href="css/style.css">       
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="index.css">
  <title>Hello</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg top">
    <div class="container-fluid">
      <a style="color: black; font-size: 17px;" class="navbar-brand" href="#">INDIAN<br>FASHION<br>STORE</a>
      <a style="margin-right:2rem;color:white;background-color: black; border: 2px solid black;border-radius: 15px; padding-top: 0px;padding-bottom: 0px;"
        class="navbar-brand hide" href="#">ISHTORE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>&#9776;
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3">
            <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal1">
              WHAT'S NEW
            </a>
            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="Modal1" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <div class="container"
                            style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"> <a href="#">New In
                                  Clothing</a></p>
                              <p class="mb-0 cat"><a href="#">New In Active
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New In
                                  Accessories</a></p>
                              <p class="mb-0 cat"><a href="#">New In Beauty</a>
                              </p>
                              <p class="mb-0 cat"><a href="#">New In Bags</a>
                              </p>
                              <p class="mb-0 cat"><a href="#">New IN Beach
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Shoes</a>
                              </p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 subcat"><a href="#">Jeans</a></p>
                              <p class="mb-0 subcat"><a href="#">T-Shirt</a></p>
                              <p class="mb-0 subcat"><a href="#">Shirt</a></p>
                              <p class="mb-0 subcat"><a href="#">Bottoms</a></p>
                              <p class="mb-0 subcat"><a href="#">Cardigans</a></p>
                              <p class="mb-0 subcat"><a href="#">Couple
                                  T-Shirts</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Men's
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Women's
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Kids's
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New IN
                                  Accessories</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">New In Shoes and
                                  Accessories</a></p>
                              <p class="mb-0 cat"><a href="#">New In
                                  BagPack</a></p>
                              <p class="mb-0 cat"><a href="#">New In Active
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New In
                                  Nightwear</a></p>
                              <p class="mb-0 cat"><a href="#">New In Stocks</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <div class="container"
                            style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal2">
              MEN
            </a>
            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <div class="container"
                            style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"> <a href="#">MEN'S WEAR</a>
                              </p>
                              <p class="mb-0 cat"><a href="#">NEW IN</a></p>
                              <p class="mb-0 cat"><a href="#">T-SHIRTS</a></p>
                              <p class="mb-0 cat"><a href="#">SHIRTS</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                              <p class="mb-0 cat"><a href="#">ACCESSORIES</a>
                              </p>
                              <p class="mb-0 cat"><a href="#">PREMIUN COLLECTIONS</a></p>
                              <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                              <p class="mb-0 cat"><a href="#">ACTIVE WEAR</a>
                              </p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">OUTWEAR</a></p>
                              <p class="mb-0 subcat"><a href="#">SweatShirt</a></p>
                              <p class="mb-0 subcat"><a href="#">Hoodies</a></p>
                              <p class="mb-0 subcat"><a href="#">Jackets</a></p>
                              <p class="mb-0 subcat"><a href="#">Formal Wear</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                              <p class="mb-0 subcat"><a href="#">Denims</a></p>
                              <p class="mb-0 subcat"><a href="#">Shorts</a></p>
                              <p class="mb-0 subcat"><a href="#">Formal Pants</a></p>
                              <p class="mb-0 subcat"><a href="#">Leather Pants</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#"><b>TOPS</b></a></p>
                              <p class="mb-0 subcat"><a href="#">Long Sleeve Tops</a></p>
                              <p class="mb-0 subcat"><a href="#">Polo Tshirts</a></p>
                              <p class="mb-0 subcat"><a href="#">Cotton Shirts</a></p>
                              <p class="mb-0 subcat"><a href="#">Half Sleeve Tops</a></p>
                              <p class="mb-0 cat"><a href="#">SHOP BY OCCASION</a></p>
                              <p class="mb-0 subcat"><a href="#">Party Wear</a></p>
                              <p class="mb-0 subcat"><a href="#">Casual Wear</a></p>
                              <p class="mb-0 subcat"><a href="#">Street Punk</a></p>
                              <p class="mb-0 subcat"><a href="#">Formal Wear</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row" style="padding: 27px;">
                            <div class="col-md-6" style="margin-top: 51px;">
                              <h2 style="color: rgb(228, 102, 93); font-weight: bold;">BUY 2 GET 1</h2>
                              <h3>FREE</h3>
                            </div>
                            <div class="col-md-6">
                              <img src="7.jpeg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal3">
              WOMEN
            </a>
            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="Modal3" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="container" style="padding:0px; margin: 6px 0px;">
                            <img src="bombay.jpg" alt="" style="height: 120px; width: 161px;">
                          </div>
                          <div class="container" style="padding:0px; margin: 6px 0px;">
                            <img src="bombay.jpg" alt="" style="height: 120px; width: 161px;">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"> <a href="#">WOMEN'S CLOTHING</a></p>
                              <p class="mb-0 cat"><a href="#">DRESSES</a></p>
                              <p class="mb-0 cat"><a href="#">BLOUSES</a></p>
                              <p class="mb-0 cat"><a href="#">T-SHIRTS</a></p>
                              <p class="mb-0 cat"><a href="#">SWEATSHIRTS</a></p>
                              <p class="mb-0 cat"><a href="#">ACCESSORIES</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">SWEATERS</a></p>
                              <p class="mb-0 subcat"><a href="#">cardigans</a></p>
                              <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                              <p class="mb-0 subcat"><a href="#">Pullovers</a></p>
                              <p class="mb-0 cat"><a href="#">SWEATSHIRTS</a></p>
                              <p class="mb-0 subcat"><a href="#">Hoddies</a></p>
                              <p class="mb-0 subcat"><a href="#">Oversize</a></p>
                              <p class="mb-0 cat"><a href="#">OUTWEAR</a></p>
                              <p class="mb-0 subcat"><a href="#">Coats</a></p>
                              <p class="mb-0 subcat"><a href="#">Jackets</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">JUMPSUIT & ROMPERS</a></p>
                              <p class="mb-0 cat"><a href="#">BLOUSES</a></p>
                              <p class="mb-0 cat"><a href="#">TANK TOPS</a></p>
                              <p class="mb-0 cat"><a href="#">DRESSES</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                              <p class="mb-0 subcat"><a href="#">Jeans</a></p>
                              <p class="mb-0 subcat"><a href="#">Straight Pants </a></p>
                              <p class="mb-0 subcat"><a href="#">Leather Pants</a></p>
                              <p class="mb-0 subcat"><a href="#">Shorts</a></p>
                              <p class="mb-0 subcat"><a href="#">Skirts</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="container p-0">
                            <h3>Shop By Style</h3>
                            <div class="row">
                              <div class="col-md-6">
                                <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                <div>
                                  <p>Beachwear</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                <div style="margin-left: 30px;">
                                  <p>Party</p>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="align-items-center">
                                  <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                  <p>Sporty</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                <div style="margin-left: 20px;">
                                  <p>At Home</p>
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
          </li>

          <li class="nav-item mx-3">
            <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal4">
              KIDS
            </a>
            <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="Modal4" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <div class="container"
                            style="background: rgb(111, 230, 164);color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"> <a href="#">KIDS WEAR</a></p>
                              <p class="mb-0 cat"><a href="#">VIEW ALL</a></p>
                              <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                              <p class="mb-0 cat"><a href="#">New In</a></p>
                              <p class="mb-0 cat"><a href="#">TOPS</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOM</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Shoes</a></p>
                              <p class="mb-0 cat"><a href="#">SWEAT SHIRT</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">BABY GIRL'S CLOTHING</a></p>
                              <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                              <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                              <p class="mb-0 subcat"><a href="#">Dresses</a></p>
                              <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                              <p class="mb-0 subcat"><a href="#">Partywear</a></p>
                              <p class="mb-0 cat"><a href="#">BABY BOY'S CLOTHING</a></p>
                              <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                              <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">BABY'S ACCESSORIES</a></p>
                              <p class="mb-0 subcat"><a href="#">Socks & Tights</a></p>
                              <p class="mb-0 subcat"><a href="#">Hats & Gloves</a></p>
                              <p class="mb-0 cat"><a href="#">SHOP BY TREND</a></p>
                              <p class="mb-0 subcat"><a href="#">Animal Print</a></p>
                              <p class="mb-0 subcat"><a href="#">Cartoon Print</a></p>
                              <p class="mb-0 subcat"><a href="#">Floral</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <!-- <div class="container"
                            style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal5">
              SALE
            </a>
            <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="Modal5" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                          <h3 style="font-size: 2.5rem;">Brand Of The Week</h3>
                          <img src="11.jpg" style="width: 100%;" alt="">
                          <!-- <div class="container"
                            style="background: rgb(111, 230, 164);color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div> -->
                        </div>
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-6 main">
                              <p class="mb-0 cat"> <a href="#">KIDS WEAR</a></p>
                              <p class="mb-0 cat"><a href="#">VIEW ALL</a></p>
                              <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                              <p class="mb-0 cat"><a href="#">New In</a></p>
                              <p class="mb-0 cat"><a href="#">TOPS</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOM</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Shoes</a></p>
                              <p class="mb-0 cat"><a href="#">SWEAT SHIRT</a></p>
                            </div>
                            <div class="col-md-6 main">
                              <p class="mb-0 cat"><a href="#">BABY GIRL'S CLOTHING</a></p>
                              <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                              <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                              <p class="mb-0 subcat"><a href="#">Dresses</a></p>
                              <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                              <p class="mb-0 subcat"><a href="#">Partywear</a></p>
                              <p class="mb-0 cat"><a href="#">BABY BOY'S CLOTHING</a></p>
                              <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                              <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 main">
                          <p class="cat">SPECIAL OFFERS</p>
                          <div class="row">
                            <div class="col-sm-6">
                              <p class="subcat">FLAT 10% OFF</p>
                              <img class="offerimg" src="33.jpeg" alt="">
                              <img class="offerimg" src="33.jpeg" alt="">
                              <img class="offerimg" src="33.jpeg" alt="">
                            </div>
                            <div class="col-sm-6">
                              <p class="subcat">FLAT 20% OFF</p>
                              <img class="offerimg" src="33.jpeg" alt="">
                              <img class="offerimg" src="33.jpeg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal6">
              <i class="fa fa-search"></i>
            </a>
            <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="Modal6" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control" placeholder="Casual Shirt" aria-label="Username"
                        aria-describedby="basic-addon1">
                    </div>
                    <div class="main search">
                      <p class="title"><a href="#">SHOP BY BRAND</a> </p>
                      <p class="subtitle"><a href="#">Shirt By Suited</a> </p>
                      <p class="subtitle"><a href="#">Shirt By IDC</a> </p>
                      <p class="subtitle"><a href="#">Shirt By Sukoon</a> </p>
                      <p class="title"><a href="#">SHOP BY MATERIAL</a> </p>
                      <p class="subtitle"><a href="#">Cotton Shirt</a> </p>
                      <p class="subtitle"><a href="#">Polyster Shirt</a> </p>
                      <p class="subtitle"><a href="#">Polyster T-Shirt</a> </p>
                      <p class="title"><a href="#">SHOP BY OCCASION</a> </p>
                      <p class="subtitle"><a href="#">Party Wear</a> </p>
                      <p class="subtitle"><a href="#">Formal Wear</a> </p>
                      <p class="subtitle"><a href="#">Casual Wearsub</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <form class="d-flex">
          <!-- <i class="fa fa-user fa-2x" aria-hidden="true"></i> -->
          <a style="color: black; padding: 7px;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
            data-bs-target="#Modal7">
            <i class="fa fa-user fa-2x"></i>
          </a>
          <div class="modal fade" id="Modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class=" container">
                    <div class="row">
                      <div class="col-md-12 user p-0">
                        <div class="list-group" style="opacity: 0.5;">
                          <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
                          <a href="#" class="list-group-item list-group-item-action">Wallet</a>
                          <a href="#" class="list-group-item list-group-item-action">Track Order</a>
                          <a href="#" class="list-group-item list-group-item-action">Help</a>
                          <a href="#" class="list-group-item list-group-item-action">Gift Card</a>
                          <a href="#" class="list-group-item list-group-item-action">Saved Address</a>
                          <a href="#" class="list-group-item list-group-item-action">Saved Cards</a>
                          <a href="#" class="list-group-item list-group-item-action">Contact Us</a>
                          <a href="logoutconf.php" class="list-group-item list-group-item-action">Log Out</a>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" onclick="document.location='loginmodal.php'" class="btn btn-outline-primary p-0"
                              style="font-size: 27px;">Login</button>
                            <button type="button" onclick="document.location='signupmodal.php'" class="btn btn-outline-primary p-0" style="font-size: 27px;">
                            Signup</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
          <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
            data-bs-target="#Modal8">
            <i class="fa fa-shopping-cart fa-2x"></i>
          </a>
          <div class="modal fade" id="Modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: black;">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: white;">CART</h5>
                  <button type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"
                      aria-hidden="true"></i></button>
                </div>
                <?php
        
        $query = "SELECT * FROM cart";
        $query_run = mysqli_query($connection, $query);
        
    ?>

      
        
    <div class="container">
          <div class="row">
          <?php
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                      $pid=$row["id"];
                     
                     

        ?>
                <div class="modal-body">
                  <div class="row mb-2">
                    <div class="col-sm-3">
                    <?php echo '<img src="'.$row['img'].'" style="width: 100%;""  alt="image">'?>
                      <!-- <img src="user1.jpeg" alt="" style="width: 100%;"> -->
                    </div>
                    <div class="col-sm-9">
                      <div class="container mt-2">
                     <h4> <?php echo $row['name'] ?></h4>
                        <!-- <h4>White Cotton Tshirt</h4> -->
                        <div class="quantity mx-3">
                       
                         <form action="<?php $_PHP_SELF ?>" class="shadow-lg p-4" name="fm" method="POST">
                        <button class="minus-btn btn btn-outline-success px-3 py-1" onclick=" down('0')"type="button" value="1"  name="button1">-
                          </button>
                          <input type="text" name="quant"id="myNumber"  value="1">
                          <input type="hidden" name="val" id="<?php $row['id'] ?>" value="1">
                          <button class="minus-btn btn btn-outline-success px-3 py-1" onclick="up('10')"type="button" value="1"  name="button2">+
                          </button>
                        
                          <select name="size" style="float: right; margin-top: 5px;">
                            <option>Select Size</option>
                            <option>XXL</option>
                            <option>XL</option>
                            <option>Large</option>
                            <option>Medium</option>
                            <option>Small</option>
                          </select>
                        </div>
                        <br>
                        <div class="quantity mx-3">
                          <p><strike class="mx-3"><?php echo $row['org_price'] ?> </strike>
                          <input type="text" style="width:80px;"name="quant"id="price"  value="999"></p>
                         </div>
                      </div>
                    </div>
                  </div>
                  <hr>

                        <?php
              } 
              }
              else {
                echo "No Record Found";
              }
              ?>
              </form>
                      </div>
                    </div>
                  </div>
                  <hr>


                  <!-- <div class="row mb-2">
                    <div class="col-sm-3">
                      <img src="user1.jpeg" alt="" style="width: 100%;">
                    </div>
                    <div class="col-sm-9">
                      <div class="container mt-2">
                        <h4>White Cotton Tshirt</h4>
                        <div class="quantity mx-3">
                          <button class="plus-btn btn btn-outline-success px-3 py-1" type="button" name="button">+
                          </button>
                          <input type="text" name="name" value="1">
                          <button class="minus-btn btn btn-outline-success px-3 py-1" type="button" name="button">-
                          </button>
                          <select style="float: right; margin-top: 5px;">
                            <option>Select Size</option>
                            <option>XXL</option>
                            <option>XL</option>
                            <option>Large</option>
                            <option>Medium</option>
                            <option>Small</option>
                          </select>
                        </div>
                        <div class="price mt-3">
                          <p><strike class="mx-3">1299 </strike> 999</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr> -->
                  <div class="container">
                    <p class="mb-0">Total Amount <span
                        style="float: right; background-color: black; border-radius: 8px; padding: 0px 8px;"> <a
                          style="color: white; text-decoration: none;" href="#">Go To Cart</a></span></p>
                  </div>
                  <div class="quantity mx-3">
                    <p><input type="text" style="width:80px;"name="quant"id="total"  value="0"><span
                        style="float: right; background-color: black; border-radius: 8px; padding: 0px 8px; margin-top: 5px;">
                        <a style="color: white; text-decoration: none;" href="#">Chech Out</a></span></p>
                  </div>
                </div>
                <hr>
                <?php
        
        $query = "SELECT * FROM wishlist";
        $query_run = mysqli_query($connection, $query);
            ?>
                <form  action="<?php $_PHP_SELF ?>" method="post" >
                <div class="container">
                <div class="row">
                <h3>Wishlist</h3>
                
                <?php
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                      $id=$row['id'];
                      
         
        ?>
                    <div class="col-sm-4 main wishlist">
                    <?php echo '<img src="'.$row['img'].'" style="width: 100%;""  alt="image">'?>
                      <p style="text-align: center; margin-bottom: 0;"><a href="#">
                      <?php echo $row['pname'] ?></a></p>
                      <p style="text-align: center;"><a style="margin-right: 15px;" href="">
                                             
                      <input type="hidden" value=" <?php echo $row['id'] ?>" name="hide">
                      <button class="fa fa-trash" type="submit" value="Delete"  name="del"></button>
                      <!-- <input class="fa fa-eye" type="submit" value="Delete"  name="del"
                      id="bu" > -->
                            </a><a style="margin-left: 15px;" href=""><i class="fa fa-eye"
                            aria-hidden="true"></i></a></p>
                    </div>
                    <?php
              } 
              }
              if(isset($_POST["del"]))
                {
                $valuep=$_POST["hide"];
                $sql="DELETE FROM wishlist WHERE id='".$valuep."'";
                $query_run = mysqli_query($connection, $sql);
          }
            
              ?>
               </form>
<!--                     

                    <div class="col-sm-4 main wishlist">
                      <img src="user1.jpeg" style="width: 100%;" alt="">
                      <p style="text-align: center; margin-bottom: 0;"><a href="#">Skirt</a></p>
                      <p style="text-align: center;"><a style="margin-right: 15px;" href="#"><i class="fa fa-eye"
                            aria-hidden="true"></i></a><a style="margin-left: 15px;" href="#"><i class="fa fa-trash"
                            aria-hidden="true"></i></a></p>
                    </div>
                    <div class="col-sm-4 main wishlist">
                      <img src="user1.jpeg" style="width: 100%;" alt="">
                      <p style="text-align: center; margin-bottom: 0;"><a href="#">Skirt</a></p>
                      <p style="text-align: center;"><a style="margin-right: 15px;" href="#"><i class="fa fa-eye"
                            aria-hidden="true"></i></a><a style="margin-left: 15px;" href="#"><i class="fa fa-trash"
                            aria-hidden="true"></i></a></p>
                    </div>-->
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </nav>

<!-- <link rel="stylesheet" type='text/css' href="css/style.css">  -->
<div class="container-fluid">
	<div class="row">
	  <div class="col-sm-2">
        <div class="container">
      <form method="post" id="search_form">
        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5 id="type">Brand</h5><div id="div1" class="myDIV">
                                 <ul class="list-group">
                                <?php  
								foreach ($categories as $key => $category) {
                                    if(isset($_POST['category'])) {
                                        if(in_array($product->cleanString($category['category_id']),$_POST['category'])) {
                                            $categoryCheck ='checked="checked"';
                                        } else {
											$categoryCheck="";
                                        }
									}
                                ?>
								<li class="list-group-item">
									<div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($category['category_id']); ?>" <?php echo @$categoryCheck; ?> name="category[]" 
                  class="sort_rang category"><?php echo ucfirst($category['category_name']); ?></label></div>
								</li>
                                <?php } ?>
                                <div>
                                </ul>
                
                            </div>
                        </div>
                          <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5 id="categ">Categories</h5><div id="div2" class="myDIV">
                                <?php 
								foreach ($brands as $key => $brand) {
                                    if(isset($_POST['brand'])) {
                                        if(in_array($product->cleanString($brand['brand']),$_POST['brand'])) {
                                            $brandChecked ='checked="checked"';
                                        } else {
											$brandChecked="";
                                        }
									}
                                ?>
								<li class="list-group-item">
									<div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($brand['brand']); ?>" <?php echo @$brandChecked; ?> name="brand[]" class="sort_rang brand"><?php echo ucfirst($brand['brand']); ?></label></div>
								</li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5 id="sort">Sort By</h5><div id="div3" class="myDIV">
        
								<div class="radio disabled">
									<label><input type="radio" name="sorting" value="newest" <?php if(isset($_POST['sorting']) && ($_POST['sorting'] == 'newest' || $_POST['sorting'] == '')) {echo "checked";} ?> class="sort_rang sorting">Newest</label>
								</div> 
								<div class="radio">
									<label><input type="radio" name="sorting" value="low" <?php if(isset($_POST['sorting']) && $_POST['sorting'] == 'low') {echo "checked";} ?> class="sort_rang sorting">Price: Low to High</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="sorting" value="high" <?php if(isset($_POST['sorting']) && $_POST['sorting'] == 'high') {echo "checked";} ?> class="sort_rang sorting">Price: High to Low</label>
								</div>								                              
                            </div>
                        </div>
                        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5 id="material">Material</h5><div id="div4" class="myDIV">
                <ul class="list-group">
                                <?php 
								foreach ($materials as $key => $material) {
                                    if(isset($_POST['material'])) {
                                        if(in_array($product->cleanString($material['material']),$_POST['material'])) {
                                            $materialCheck='checked="checked"';
										} else { 
											$materialCheck="";
										}
                                    }
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($material['material']); ?>" <?php echo @$materialCheck?>  name="material[]" class="sort_rang material"><?php echo ucfirst($material['material']); ?></label></div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5 id="size">Size</h5><div id="div5" class="myDIV">
                <ul class="list-group">
                                    <?php foreach ($productSizes as $key => $productSize) {
                                        if(isset($_POST['size'])){
                                            if(in_array($productSize['size'],$_POST['size'])) {
                                                $sizeCheck='checked="checked"';
                                            } else {
											                       	$sizeCheck="";
                                            }
                                        }
                                    ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?php echo $productSize['size']; ?>" <?php echo @$sizeCheck; ?>  name="size[]" class="sort_rang size"><?php echo $productSize['size']; ?></label></div>
                                        <?php } ?>
                                </ul>
                            </div>
                        </div>
                        </div>
                        </div>
                        
                        <div class="col-sm-10">
                          <h3 style="font-size: 23px; font-weight: bold;">All Products</h3>
			<div class="container">
                 	<div class="row">
        
        
                            <div id="results">

                            </div>
                                      </div>
                                      </div>
                                      </div>
              
				<input type="hidden" id="totalRecords" value="<?php echo $totalRecords; ?>">        
                <div>   
            </form>
            
            <div>
        </div> 
           </div>
           </div>
           <hr>
        <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-sm-8">
        <div class="container px-0" style="background-color: rgb(226, 226, 226);">
          <div class="row">
            <p class="mb-0" style="text-align: center;">OUR PROMISE</p>
            <div class="col-sm-3">
              <p style="text-align: center;"><i class="fa fa-shield" aria-hidden="true"></i> <span
                  style="font-size: 18px;">Minimum 6 Months Warrenty</span></p>
            </div>
            <div class="col-sm-3">
              <p style="text-align: center;"><i class="fa fa-truck" aria-hidden="true"></i> <span
                  style="font-size: 18px;">Home delivery at your doorstep</span></p>
            </div>
            <div class="col-sm-3">
              <p style="text-align: center;"><i class="fa fa-repeat" aria-hidden="true"></i> <span
                  style="font-size: 18px;">Easy 250 Hour Return<span></p>
            </div>
            <div class="col-sm-3">
              <p style="text-align: center;"><i class="fa fa-users" aria-hidden="true"></i> <span
                  style="font-size: 18px;">Brand Assured Quality<span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="container px-0" style="background-color: rgb(226, 226, 226);">
          <p style="text-align: center;">FOLLOW US</p>
          <div class="row">
              <p style="text-align: center; margin-bottom: 2rem;"><a style="padding: 20px; color: black;" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
              <a style="padding: 20px; color: black;" href="#"><i class="fa fa-linkedin" aria-hidden="true"></a></i>
              <a style="padding: 20px; color: black;" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a style="padding: 20px; color: black;" href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-1">
    <div class="row">
      <div class="col-sm-8">
        <div class="container p-2" style="background-color: rgb(63, 62, 62); color: white;">
          <div class="row">
            <div class="col-sm-5">
              <h3 class="mb-0">Ishtore</h3>
              <p style="font-size: 19px; padding-top: 20px;">As India's First E-Commerce Platform Commited To Boosting Indain Fashion And Apparel Brands Accessible To Everyone
              <span style="color: green;">#atmanirbharbharat</span></p>
            </div>
            <div class="col-sm-4">
              <p>USEFUL LINKS</p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">CONTACT US</a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">FAQs
              </a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">Voucher Terms and Conditions </a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">Track Order</a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">Cancellations</a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">Returns</a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">Privacy Policy</a></p>
            </div>
            <div class="col-sm-3">
              <p>ABOUT US</p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">Who Are We</a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">Influencer Program</a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">The Affiliate Program</a></p>
              <p class="mb-0"><a style="text-decoration: none; color: white; font-size: 20px;" href="#">Carrers</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="container px-0" style="background-color: rgb(226, 226, 226);">
          <p style="text-align: center;">FOLLOW US</p>
          <div class="row">
              <p style="text-align: center; margin-bottom: 2rem;"><a style="padding: 20px; color: black;" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
              <a style="padding: 20px; color: black;" href="#"><i class="fa fa-linkedin" aria-hidden="true"></a></i>
              <a style="padding: 20px; color: black;" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a style="padding: 20px; color: black;" href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="index.js"></script>

  <script type="text/javascript">
    function up(max) {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
    
    if (document.getElementById("myNumber").value >= parseInt(max)) {
        document.getElementById("myNumber").value = max; 
    }
    document.getElementById("price").value = parseInt( document.getElementById("price").value )* 
                                             parseInt( document.getElementById("myNumber").value );
    document.getElementById("total").value = parseInt(document.getElementById("price").value) ;
    
}
function down(min) {
  
  document.getElementById("price").value = parseInt( document.getElementById("price").value ) / parseInt( document.getElementById("myNumber").value );
  document.getElementById("total").value = parseInt(document.getElementById("price").value) ;
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
  
   
    if (document.getElementById("myNumber").value <= parseInt(min)) {
        document.getElementById("myNumber").value = min;
      
    }
}
$(function(){
      $(".myDIV").hide(); // try to hide google navigation bar
   });
    $("#type").click(function(){
     $("#div1").toggle();
    });
    $("#categ").click(function(){
     $("#div2").toggle();
    });
    $("#sort").click(function(){
     $("#div3").toggle();
    });
    $("#material").click(function(){
     $("#div4").toggle();
    });
    $("#size").click(function(){
     $("#div5").toggle();
    });
    

$(document).ready(function() {
    var totalRecord = 0;
	var category = getCheckboxValues('category');
    var brand = getCheckboxValues('brand');
    var material = getCheckboxValues('material');
    var size = getCheckboxValues('size');
    var totalData = $("#totalRecords").val();
	var sorting = getCheckboxValues('sorting');
	$.ajax({
		type: 'POST',
		url : "load_products.php",
		dataType: "json",			
		data:{totalRecord:totalRecord, brand:brand, material:material, size:size, category:category, sorting:sorting},
		success: function (data) {
			$("#results").append(data.products);
			totalRecord++;
		}
	});	
    $(window).scroll(function() {
		scrollHeight = parseInt($(window).scrollTop() + $(window).height());		
        if(scrollHeight == $(document).height()){	
            if(totalRecord <= totalData){
                loading = true;
                $('.loader').show();                
				$.ajax({
					type: 'POST',
					url : "load_products.php",
					dataType: "json",			
					data:{totalRecord:totalRecord, brand:brand, material:material, size:size},
					success: function (data) {
						$("#results").append(data.products);
						$('.loader').hide();
						totalRecord++;
					}
				});
            }            
        }
    });
    function getCheckboxValues(checkboxClass){
        var values = new Array();
		$("."+checkboxClass+":checked").each(function() {
		   values.push($(this).val());
		});
        return values;
    }
    $('.sort_rang').change(function(){
        $("#search_form").submit();
        return false;
    });
	$(document).on('click', 'label', function() {
		if($('input:checkbox:checked')) {
			$('input:checkbox:checked', this).closest('label').addClass('active');
      $(".myDIV").show(); 
		}
	});	
});
</script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  

</body>

</html>          
	
