<?php
include('security.php');
include('navbar.php');
if(isset($_POST["cart"]))
{
$id=$_POST["pid"];
$name=$_POST["pname"];
$price=$_POST["pprice"];
$image=$_POST["pimage"];
$ori_price=$_POST["ori_price"];
$size=$_POST["size"];
    
$query = "SELECT * FROM cart";
    $query_run = mysqli_query($connection, $query);
    foreach($query_run as $row)
    {
      $ppid= $row['pid'];
    }
  if($ppid!=$id)
{
$sql="INSERT INTO cart(pname,img,org_price,price,size,pid) VALUES('".$name."','".$image."','".$ori_price."',
                                                                  '".$price."','".$size."','".$id."')";
 $no=mysqli_query($connection,$sql); 
echo'<div class="alert alert-success alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Item added to your cart</strong>
      </div>';
}
else{
    echo'<div class="alert alert-danger alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Item already added to your cart</strong>
      </div>';

}
}
if(isset($_POST["wishlist"]))
{
$id=$_POST["pid"];
$name=$_POST["pname"];
$price=$_POST["pprice"];
$image=$_POST["pimage"];
$ori_price=$_POST["ori_price"];
$size=$_POST["size"];
    
$query = "SELECT * FROM wishlist";
    $query_run = mysqli_query($connection, $query);
    foreach($query_run as $row)
    {
      $ppid= $row['pid'];
    }
  if($ppid!=$id)
{
$sql="INSERT INTO wishlist(pname,img,price,pid) VALUES('".$name."','".$image."',
                                                                  '".$price."','".$id."')";
 $no=mysqli_query($connection,$sql); 
echo'<div class="alert alert-success alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Item added to your wishlist</strong>
      </div>';
}
else{
    echo'<div class="alert alert-danger alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Item already added to your wishlist</strong>
      </div>';

}
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="singlepro.css">
  <title>Hello</title>
  <style>
   
    .small-container {
      max-width: 1080px;
      margin: auto;
      padding-left: 25px;
      padding-right: 25px;
      border: none!important;
    }

    .single-product {
      margin-top: 30px;

    }

    .single-product .col-2 img {
      padding: 0;
    }

    .single-product .col-2 {
      padding: 20px;
    }

    .single-product h4 {
      margin: 20px 0;
      font-size: 22px;
      font-weight: bold;
    }

    .single-product select {
      display: block;
      padding: 7px;
      margin-top: 45px;
      border-radius: 10px;
      border: 3px solid #dccefa;
    }

    .single-product input {
      width: 45%;
      height: 40px;
      padding: 10px;
      font-size: 15px;
      margin-right: 5px;

    }

    input:focus {
      outline: none;
    }

    .row1 {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .small-img-row1 {
      padding-top: 5px;
      display: flex;
      justify-content: space-between;

    }

    .small-img-col {
      flex-basis: 24%;
      cursor: pointer;
    }
    @media(min-width:901px)
    {
      
    .col-2 {
      flex-basis:50%!important;
      /* min-width: 300px; */

    }
    }
    @media(max-width:900px)
    {
      
    .col-2 {
      flex-basis:100%;
      /* min-width: 300px; */

    }
    }

    .col-2 img {
      max-width: 100%;
      padding: 50px 0;
    }

    .col-2 h1 {
      font-size: 50px;
      line-height: 60px;
      margin: 25px 0;
    }

    .single-product .col-2 .bagbtn {
      background-color: #dccefa;
      padding: 8px 38px 8px 38px;
      font-size: 20px;
      margin-top: 14px;
      /* border-radius: 10px; */
      border: 1px solid #000;
      color: black!important;
      font-family: auto;
    }

    .single-product .col-2 .wishlist {
      background-color: #ffffff;
      padding: 8px 42px 8px 42px;
      font-size: 20px;
      margin-top: 14px;
      /* border-radius: 10px; */
      color: black!important;
      font-family: auto;
      border: 1px solid #000;
    }

    .middle {
      width: 55%;
      height: 200px;
      border: 1px solid black;
      margin: auto;
      margin-top: 38px;
      box-shadow: 3px 3px 7px grey;
    }

    .middle h4 {
      text-align: center;
      font-family: serif;
    }

    .categories {
      margin: 70px 0;
    }

    .col-3 {
      flex-basis: 30%;
      /* min-width: 250px; */
      margin-bottom: 30px;
      text-align: center;
    }

    .col-3 img {
      width: 100%;
    }
    

    .col-3 a {
      
      text-decoration: none;
      color: black;
      font-size: 27px;
    }

    @media only screen and (max-width:600px) {
      .row1 {
        text-align: center;

      }

      .col-2,
      .col-3 {
        flex-basis: 100%;
      }

      .single-productc.row1 {
        text-align: left;
      }

      .single-product .col-2 {
        padding: 20px 15px;
      }

      .single-product h1 {
        font-size: 26px;
        line-height: 32px;
      }
    }
  </style>
</head>

<body>
  <!-- gallery-div -->


  <div class="small-container single-product">
    <div class="row1">
    <?php

if(isset($_POST['prodetail']))
{
    $id = $_POST['p_id'];
    
    $query = "SELECT * FROM products WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    

    foreach($query_run as $row)
    {
     
        ?>
      <div class="col-2 gallery-div">
      <?php echo '<img src="images/'.$row['images'].'" width="100%" id="product-img" alt="">'?> 
        <div class="small-img-row1">
          <div class="small-img-col">
          <?php echo '<img src="images/'.$row['image1'].'" width="100%" class="small-img" alt="image1">'?>
          </div>
          <div class="small-img-col">
          <?php echo '<img src="images/'.$row['image2'].'" width="80%" class="small-img" alt="image2">'?>
          </div>
          <div class="small-img-col">
          <?php echo '<img src="images/'.$row['image3'].'" width="80%" class="small-img" alt="image3">'?>
          </div>
          <!-- <div class="small-img-col">
          <?php echo '<img src="images/'.$row['image4'].'" width="80%" class="small-img" alt="image4">'?>
        </div> -->
      </div>
     </div>
      <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper-container mySwiper2"
    >
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
        </div>
      </div>
    </div> 
   

      <div class="col-2 gallery-disc">
      <form   method="post" id="myform" >
        <h2 style=" margin-bottom: 0;">Indian Clothing Company</h2>
        <p style=" opacity: 0.7; font-size: 23px;"><?php echo $row['name'] ?>
        </p>
        <hr style="height: 1.5px;">
        <p style="font-size: 26px;  margin-bottom: 0;">Rs
           <span><?php echo $row['price'] ?> </span><strike
            style="opacity: 0.7;">&nbsp;&nbsp;&nbsp;<?php echo $row['saleprice'] ?></strike></p>
        <p style=" color: #af92f5; font-size: 14px;">Inclusive Of All Taxes
        </p>
        <select name="size">
          <option>Select Size</option>
          <option>XXL</option>
          <option>XL</option>
          <option>Large</option>
          <option>Medium</option>
          <option>Small</option>
        </select>
        <br>
         <!-- add to cart -->
        <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="pname" value="<?php echo $row['name'] ?>">
        <input type="hidden" name="pprice" value="<?php echo $row['price'] ?>">
        <input type="hidden" name="pimage" value="<?php echo $row['images'] ?>">
        <input type="hidden" name="ori_price" value="<?php echo $row['saleprice'] ?>">
      
        <input  type="submit" name="cart" id="submit" value="ADD TO BAG"  class="btn btn-outline-secondary bagbtn real-btn1">
       <!-- add to wishlist -->
        <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="pname" value="<?php echo $row['name'] ?>">
        <input type="hidden" name="pprice" value="<?php echo $row['price'] ?>">
        <input type="hidden" name="pimage" value="<?php echo $row['images'] ?>">
        <input type="hidden" name="ori_price" value="<?php echo $row['saleprice'] ?>">
      
        <input  type="submit" name="wishlist" id="submit_wish" value="WISHLIST" class="btn btn-outline-secondary wishlist  real-btn2">
      
        <!-- <a class="btn btn-outline-secondary bagbtn real-btn1">ADD TO BAG</a>&nbsp;
        <a class="btn btn-outline-secondary wishlist  real-btn2">WISHLIST</a> -->
        <hr style="height: 1.5px;">
        <p >Delivery Options</p>
        <input style="width: 50%;" type="text" class="pincode-btn" placeholder="Enter Pincode"> <a href="#" style="text-decoration: none;"><span style="color: blueviolet;cursor: pointer;">Check</span></a>
        <p style=" font-size: 13px; opacity: 0.9;" class="pincode-text">Please Enter Pincode To
          Check Delivery Time And Availability Of Cash On Delivery</p>
      </div>
      </form>
    </div>
    <hr style="height: 1.5px;">
    <p style=" margin-bottom: 0;">Product Details</p>
    <p style=" font-size: 16px; opacity: 0.8; padding-top: 5px;"><?php echo $row['prod_details'] ?></p>
    <p style=" margin-bottom: 0;" class="type-para1"><?php echo $row['material'] ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material
      And Care</p>
    <p style=" opacity: 0.8; font-size: 20px; " class="type-para2">Cotton
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dry
      Clean Only</p>

    <p style=" margin-bottom: 0;" class="type-para1">Size And Fit
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Specification
    </p>
    <p style=" opacity: 0.8; font-size: 20px;" class="type-para2">Slimfit
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['size'] ?></p>
      <?php
                }
            }
        ?>
  </div>
  <!-- <div class="middle">
    <h4>Pair With It</h4>
    <div class="row1">
      
    </div>
  </div> -->

  <div class="categories">
    <div class="small-container small-container2"    style="border: 1px solid black; box-shadow: 3px 3px 5px gray; padding: 40px; padding-bottom: 0;">
       <h3 style="margin-bottom: 20px;text-align: center;">Pair With It</h3>
      <div class="row1"
     >
       
        <div class="col-3">
          <img src="category-1.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; ">Rs 1299</p>
        </div>
        <div class="col-3">
          <img src="category-2.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; ">Rs 1299</p>
        </div>
        <div class="col-3">
          <img src="category-3.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; ">Rs 1299</p>
        </div>
      </div>
    </div>
  </div>
<!-- 
  <div class="container-fluid container-mobile  mt-5" style="">
    <div class="shop">
      <h1
        style="font-size: 35px; padding-bottom: 25px; font-size: 31px;">
        Customers Also Liked</h1>
      <div class="colu wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu colu-even wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu colu-even wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu colu-even wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
    </div>
  </div>


  <div class="container-fluid container-mobile mt-5" style="">
    <div class="shop">
      <h1
        style="font-size: 35px; padding-bottom: 25px;  padding-left: 38px; font-size: 31px;">
        Recently Viewed</h1>
      <div class="colu wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu colu-even wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu colu-even wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
      <div class="colu wishlist main">
        <img src="user1.jpeg" alt="Jane" style="width:100%">
        <p style="margin-bottom: 0;"><a href="#">Skirt</a></p>
        <p style="opacity: 0.8; font-size: 16px; margin-bottom: 0;">Blue Cotton Shirt</p>
        <p style="font-size: 16px;"> 999 <strike style="opacity: 0.5;" class="mx-3">1299 </strike></p>
      </div>
    </div>
  </div> -->



  <!-- --------------------------------recently view section start------------------ -->

<section class="customer">
  <h3>Customers Also Liked</h3>
  <div class="customer-div">
    <div class="cus cus-1">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-2">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-3">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-4">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-5">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-extra">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
  </div>
</section>


  <!-- --------------------------------customer liked section end------------------ -->

  <div class="main-btn"></div>


  <!-- --------------------------------recently view section start------------------ -->

  <section class="customer last-section">
    <h3>Recently viewed</h3>
    <div class="customer-div">
      <div class="cus cus-1">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-2">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-3">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-4">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-5">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-extra">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
    </div>
  </section>
  
  <!-- <div class="arrow-1">
    <i class="fas fa-arrow-right"></i>
  </div>

  <div class="arrow-2">
    <i class="fas fa-arrow-left"></i>
  </div> -->


  <!-- --------------------------------recently view section end------------------ -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="index.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <script>
      var ProductImg = document.getElementById("product-img");
      var SmallImg = document.getElementsByClassName("small-img");
      SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;
      }
      SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;
      }
      SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;
      }
      SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;
      }
    </script>
     <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
</body>

</html>





