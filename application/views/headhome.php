<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>../assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>../assets/css/responsive.css">
    <title> Custom Gaming Computers - [fill-header] </title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>../assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>../assets/css/slick-theme.css">
  <script src="<?php echo base_url() ?>../assets/vendor/jquery/dist/jquery.min.js"></script>

  </head>
  <body>


     <header id="header">
        
        <div class="header-main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php"> <img src="<?php echo base_url()?>../assets/img/logo.png" alt="logo" class="mainlogo"></a>
                            <a id="cartmobilebtn" style="cursor:pointer" class="mernulist1-cart-for-mobile" >
                              <img src="<?php echo base_url() ?>../assets/img/cart-icon.png"  alt="1">
                              <span class="spancart" id="mobilespancart">0</span>
                            </a>
                            <button class="navbar-toggler41" onclick="openNavMenu()">
                              <img src="<?php echo base_url()?>../assets/img/menu-icon.png" alt="menu" class="list9798798798">
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto">
                                
                                <li class="nav-item active">
                                  <a class="nav-link" href="<?php echo base_url().'products'?>"> Products </a>
                                </li>
								
                                <li class="nav-item active">
                                  <a class="nav-link" href="<?php echo base_url().'products/viewLimitedEdition'?>"> Limited Edition </a>
                                </li>

                                <li class="nav-item">
                                  <a class="nav-link" href="./finance.php"> Financing </a>
                                </li>

                                <li class="nav-item">
                                  <a class="nav-link" href="#"> Support </a>
                                </li>

                                <li class='nav-item'><a class='nav-link' href='login.php'> <img src='<?php echo base_url()?>../assets/img/profile-icon.png' class='mernulist1-profile' alt='1'></a></li>

                                <li class="nav-item">
                                    <a class="nav-link" id="cartbtn" style="cursor:pointer;position:releative">
                                      <img src="<?php echo base_url() ?>../assets/img/cart-icon.png" class="mernulist1-cart" alt="1"> 
                                      <span class="spancart" id="spancart"><?php echo isset($_SESSION['total_cart'])?$_SESSION['total_cart']:0 ?></span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                  <a class="nav-link" href="#"> Language </a> 
                                  <!-- <a class="select-tag" href="#"> <img src="img/lan1.png" alt="l1"> </a>
                                  <a class="select-tag" href="#"> <img src="img/lan2.png" alt="l2"> </a> -->
                                </li>

                              </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      
                      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
      
                            <div class="carousel-item active" data-interval="10000">
      
      
                              <div class="list-section-list-area9879879-banner-7458">
                                  <div class="row">
      
                                      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="right-banner-images">
                                              <img src="<?php echo base_url()?>../assets/img/builds/0005/1.png" alt="p1">
                                          </div>
                                      </div>
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="left-content-banner-ares9789">
                                              <h1> Every detail matters </h1>
                                              <p> Forged out of hours spent gaming, out of failures and successes,
                                                  our custom systems give you the best performance money can buy.
                                                  Do not spend money on proprietary builds limiting your dependability.</p>
                                          </div>
                                      </div>
      
      
                                  </div>
                              </div>
      
                              <div class="main-desktop-list-585">
                                  <div class="row">
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="left-content-banner-ares9789">
                                              <h1> Every detail matters </h1>
                                              <p> Forged out of hours spent gaming, out of failures and successes,
                                                  our custom systems give you the best performance money can buy.
                                                  Do not spend money on proprietary builds limiting your dependability.</p>
                                          </div>
                                      </div>
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="right-banner-images">
                                              <img src="<?php echo base_url()?>../assets/img/builds/0005/1.png" alt="p1">
                                          </div>
                                      </div>
      
                                  </div>
                              </div>
      
      
                            </div>
      
                            <div class="carousel-item" data-interval="2000">
      
                              
                              <div class="list-section-list-area9879879-banner-7458">
                                  <div class="row">
      
                                      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="right-banner-images">
                                              <img src="<?php echo base_url()?>../assets/img/builds/0059/1.png" alt="p1">
                                          </div>
                                      </div>
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="left-content-banner-ares9789">
                                              <h1> Every detail matters </h1>
                                              <p> Forged out of hours spent gaming, out of failures and successes,
                                                  our custom systems give you the best performance money can buy.
                                                  Do not spend money on proprietary builds limiting your dependability.</p>
                                          </div>
                                      </div>
      
      
                                  </div>
                              </div>
      
                              <div class="main-desktop-list-585">
                                  <div class="row">
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="left-content-banner-ares9789">
                                              <h1> Every detail matters </h1>
                                              <p> Forged out of hours spent gaming, out of failures and successes,
                                                  our custom systems give you the best performance money can buy.
                                                  Do not spend money on proprietary builds limiting your dependability.</p>
                                          </div>
                                      </div>
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="right-banner-images">
                                              <img src="<?php echo base_url()?>../assets/img/builds/0059/1.png" alt="p1">
                                          </div>
                                      </div>
      
                                  </div>
                              </div>
      
                            </div>
      
                            <div class="carousel-item">
                              <div class="list-section-list-area9879879-banner-7458">
                                  <div class="row">
      
                                      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="right-banner-images">
                                              <img src="<?php echo base_url()?>../assets/img/builds/0058/1.png" alt="p1">
                                          </div>
                                      </div>
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="left-content-banner-ares9789">
                                              <h1> Every detail matters </h1>
                                              <p> Forged out of hours spent gaming, out of failures and successes,
                                                  our custom systems give you the best performance money can buy.
                                                  Do not spend money on proprietary builds limiting your dependability.</p>
                                          </div>
                                      </div>
      
      
                                  </div>
                              </div>
      
                              <div class="main-desktop-list-585">
                                  <div class="row">
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="left-content-banner-ares9789">
                                              <h1> Every detail matters </h1>
                                              <p> Forged out of hours spent gaming, out of failures and successes,
                                                  our custom systems give you the best performance money can buy.
                                                  Do not spend money on proprietary builds limiting your dependability.</p>
                                          </div>
                                      </div>
      
                                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                          <div class="right-banner-images">
                                              <img src="<?php echo base_url()?>../assets/img/builds/0058/1.png" alt="p1">
                                          </div>
                                      </div>
      
                                  </div>
                              </div>
                              
      
      
                            </div>
      
                          </div>
      
                          <a class="banner-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                              <i class='far fa-arrow-alt-circle-left'></i>
                          </a>
                          <a class="banner-next" href="#carouselExampleInterval" role="button" data-slide="next">
                              <i class='far fa-arrow-alt-circle-right'></i>
                          </a>
                      </div>
      
                  </div>
              </div>
          </div>
      </div>
    </header>
