<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title> Store </title>
  </head>
  <style>
    .icon{
      font-size: 1.1rem;
      margin-left: 0rem;
      padding: 0%;
      border: 2px solid white; 
    }
    .col{
      width:10px;
      text-align: center;
    }


    #slider {
      overflow: hidden;
    }
    
    @keyframes slider {
      0% { left: 0; }
      30% { left: 0; }
      33% { left: -100%; }
      63% { left: -100%; }
      66% { left: -200%; }
      95% { left: -200%; }
      100% { left: 0; }
    }
    #slider figure {
      width:300%;
      position: relative;
      animation: 9s slider infinite;
    }
    
    #slider figure img {
      width:33.33%;
      height : 18rem;
      float: left;
    }
    .copyright{
      margin-left: 23rem;
  }
    
 /* dropdown  */
 
  


    
  </style>
  <body>
    <!-- main div starts from here -->
    <div class="main">

      <!-- top nav starts from here -->
      <div class="uppernav">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background-color: #2874f0;">
      <div class="container nav">
        <div class="row">
        <a class="navbar-brand" href="#">
            <img src="tom&jerry.jpg" alt="logo" style="width:70px; border-radius: 50%;">
          </a>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                 
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>

          </nav>
        
          <div class="collapse navbar-collapse " id="navbarNav" style="margin-left: 3rem;">
            <ul class="navbar-nav ">
              <li class="nav-item ">
              <a href="login.php">
               <button class="btn btn-outline-light my-2 my-sm-0 " type="submit" ><i class="bi bi-unlock"></i> login</button> 
               </a>  
              </li> &nbsp;&nbsp;&nbsp;
              <li class="nav-item ">
                
              <a href="admin.php"> <button class="btn btn-outline-light my-2 my-sm-0 " type="submit"><i class="bi bi-person-circle"></i>  admin</button> </a>    
            </li>&nbsp;&nbsp;&nbsp;
              <li class="nav-item ">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="bi bi-cart3"></i> cart</button>
              </li>&nbsp;&nbsp;&nbsp;
              <li class="nav-item ">
                <button class="btn btn-outline-light my-2 my-sm-0"  type="submit" ><i class="bi bi-box-arrow-right"></i> logout</button>
              </li>&nbsp;&nbsp;&nbsp;  
            </ul>
          </div>
       

            </div>
            </div>
            </nav>
         </div>
         <!-- top nav ends here -->

 <!-- product nav starts from here -->
       <div class="2ndnav container-fluid">
       <div class="row">
      
  <div class="col">
   <img src="top offers.webp" alt="" >
   <p><b>Top offers</b> </p>
  </div>
  <div class="col">
    <img src="surfexcel.webp" alt="">
    <p><b> Groccery</b></p>
  </div>
  <div class="col">
    <img src="mobile.webp" alt="">
    <p><b> Mobiles</b></p>
  </div>
  <div class="col">
    <img src="cloths.webp" alt="">
    <p><b>Fashions</b> </p>
  </div>
  <div class="col">
    <img src="electronics.webp" alt="">
    <p><b>electronics</b> </p>
  </div>
  <div class="col">
   <img src="Home.webp" alt="">
   <p><b>Home</b> </p>
  </div>
  <div class="col">
    <img src="appliances.webp" alt="">
    <p><b>Appliances</b> </p>
  </div>
  <div class="col">
    <img src="aeroplane.webp" alt="">
    <p><b> Travel</b></p>
  </div>
  <div class="col">
    <img src="toys.webp" alt="">
    <p><b>Beauty, Toys & mores</b> </p>
  </div>
</div>
       </div>
       <!-- product nav ends here -->

<!-- sliding images starts from here -->
 <div id="slider">
  <figure>
      <img src="vk.png" >
      <img src="msd.webp">
      <img src="all.webp">
  </figure>
</div> <br><br><br><br><br><br><br><br><br><br><br><br>
<!-- sliding images ends here -->


           


<!-- footer starts from here -->
<div class="footer" style="background-color: #172337; "><br>
  <div class="row">
 <div class="col-sm-1"></div>
 <div class="col-sm-3" style="margin: 0;">
 <span style="color: white; font-size: 11px;"> Flipkart Internet Private Limited,Buildings Alyssa, </span> <br>
<span style="color: white; font-size: 11px;"> Begonia &Clove Embassy Tech Village Outer Ring Road,</span> <br>
<span style="color: white; font-size: 11px;"> Devarabeesanahalli Village,Bengaluru, 560103,</span> <br> 
<span style="color: white; font-size: 11px;"> Karnataka, India CIN : U51109KA2012PTC066107</span> <br> <br>
 <span style="border: 1px solid white; color: white; padding: 7px; border-radius: 50%; "><i class="bi bi-facebook"></i></span> &nbsp;&nbsp;
 <span style="border: 1px solid white; color: white; padding: 7px; border-radius: 50%; "><i class="bi bi-instagram"></i></span>&nbsp;&nbsp;
 <span style="border: 1px solid white; color: white; padding: 7px; border-radius: 50%; "><i class="bi bi-linkedin"></i></span>&nbsp;&nbsp;
 <span style="border: 1px solid white; color: white; padding: 7px; border-radius: 50%; "><i class="bi bi-youtube"></i></span>&nbsp;&nbsp;
 </div>
 <div class="col-sm-2" >
    
   <span class="text-light" style="font-size: 14px;"> History </span> <br>
    <span class="text-light" style="font-size: 14px;">Flipkart stories</span> <br>
    <span class="text-light" style="font-size: 14px;">payment</span> <br>
    <span class="text-light" style="font-size: 14px;">affliate marketing</span> <br>
    <span class="text-light" style="font-size: 14px;">return policy</span> <br>
 </div>
 <div class="col-sm-2">
     <span></span>
     
     <span class="text-light" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment</span> <br>
    <span class="text-light" style="font-size: 14px; ">&nbsp;&nbsp;&nbsp;&nbsp; Shipping</span> <br>
    <span class="text-light" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flipkart wholesale</span> <br>
    <span class="text-light" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;corporate information</span> <br>
    <span class="text-light" style="font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ecommerce</span> <br>
 </div>
 <div class="col-sm-1"></div>
 <div class="col-sm-1">
 <span class="text-light" style="font-size: 14px;"> Home</span> <br>
    <span class="text-light" style="font-size: 14px;"> About us</span> <br>
    <span class="text-light" style="font-size: 14px;">FAQs</span> <br>
    <span class="text-light" style="font-size: 14px;">Blog</span> <br>
    <span class="text-light" style="font-size: 14px;">Contact</span> <br>
 </div>
 <div class="col-sm-2"></div>
  </div> <br><br>
  <span class="text-secondary copyright" ><b>Copyright ©2022 All right reserved | This template is made with 🖤 by Amrendra </b> </span>
 </div> 
 </div> 

<!-- footer ends here -->

          </div>
          <!-- main div ends here -->
  </body>
  <script src="script.js"></script>
</html>