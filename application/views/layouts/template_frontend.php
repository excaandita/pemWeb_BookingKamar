<!DOCTYPE html>
<!--
Template Name: Nocobot
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title><?php echo $title;?></title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url().'assets/layout/styles/layout.css'?>" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- Top Background Image Wrapper -->

  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <h1><a href="#">HOTEL</a></h1>
      </div>
      <nav id="mainav" class="fl_right"> 
        <ul class="clear">
          <li class="<?php echo $title == 'Home' ? 'active' : '' ?>"><a href="<?php echo base_url('index.php/pengunjung') ?>">Home</a></li>
          <li><a class="<?php echo $title == 'Fasilitas' ? 'active' : '' ?>" href="#">Fasilities</a>
            <ul>
              <li><a href="#">Standar Room</a></li>
              <li><a href="#">Superior Room</a></li>
              <li><a href="#">Deluxe Room</a></li>
              <li><a href="#">Suite Room</a></li>
            </ul>
          </li>
          <li class="<?php echo $title == 'Booking' ? 'active' : '' ?>"><a href="<?php echo base_url('index.php/pengunjung/booking') ?>">Booking</a></li>
          <li><a class="<?php echo $title == 'Contact' ? 'active' : '' ?>" href="#">Contact</a></li>
          <li class="<?php echo $title == 'Profil' ? 'active' : '' ?>"><a href="#">Profil</a>
            <ul>
              <li><a href="<?php echo base_url('index.php/pengunjung/editakun') ?>">Setting</a></li>
              <li><a href="<?php echo base_url('index.php/loginpengunjung/logout'); ?>">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
  </div>
  
</div>
<!-- End Top Background Image Wrapper -->

<?php echo $contents;?>

<div class="wrapper coloured">
  <section id="ctdetails" class="hoc clear"> 
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong> 08.00am - 18.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
      </li>
    </ul>
  </section>
</div>
<div class="bgded overlay row4" style="background-image:url(<?php echo base_url().'assets/images/demo/backgrounds/01.png'?>);">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="heading">Rooms</h6>
      <ul class="nospace linklist">
        <li><a href="#">Standar Room</a></li>
        <li><a href="#">Superior Room</a></li>
        <li><a href="#">Deluxe Room</a></li>
        <li><a href="#">Suite Room</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Contact</h6>
      <p class="nospace btmspace-15">Support us</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div class="one_quarter">
      <h6 class="heading">News</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Sapien sit amet tortor nulla...</a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2021</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Consequat erat id rutrum nisi...</a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2021</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Facilities</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="#"><img src="<?php echo base_url().'assets/images/demo/footer/1.jpg'?>" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="<?php echo base_url().'assets/images/demo/footer/2.jpg'?>" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="<?php echo base_url().'assets/images/demo/footer/3.jpg'?>" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="<?php echo base_url().'assets/images/demo/footer/4.jpg'?>" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="<?php echo base_url().'assets/images/demo/footer/5.jpg'?>" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="<?php echo base_url().'assets/images/demo/footer/6.jpg'?>" alt=""></a></li>
      </ul>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Kelompok 4</a></p>
    <p class="fl_right"><a target="_blank" href="" title="Free Website Templates"></a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url().'assets/layout/scripts/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/layout/scripts/jquery.backtotop.js'?>"></script>
<script src="<?php echo base_url().'assets/layout/scripts/jquery.mobilemenu.js'?>"></script>
</body>
</html>
