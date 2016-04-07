<!DOCTYPE html>
<html>
<title>Ravindra Bhawan | IIT Roorkee</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="https://code.jquery.com/jquery-1.12.0.js"></script>

<script type="text/javascript" src="js/jssor.slider.mini.js"></script>

<!-- use jssor.slider.debug.js instead for debug -->
<script src = "js/jssor.js"></script>

<style>
.test img {cursor: pointer;border: 10px solid transparent;}
.test img:hover {border: 10px solid #f1f1f1;}
.w3-topnav a:first-child:hover{color: #009688;border-bottom: 3px solid transparent;}
/* static topnav for screens below 601px width */
@media only screen and (max-width: 601px) {.w3-topnav {position:static;}}

.gallery img {
  height: 200px;
  width: 256px;
  float: left;
}

</style>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/jssor.css">

<!-- Gallery New -->
<link  href="bower_components/viewerjs/dist/viewer.min.css" rel="stylesheet">
<script src="bower_components/viewerjs/dist/viewer.min.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>


<body id="myPage">

<!-- Side Navigation on click -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2">
  <a href="#" 
  onclick="w3_close()"
  class="w3-closenav w3-xxxlarge w3-text-teal">Close X</a>
  <a href="#">Link 1</a>   
  <a href="#">Link 2</a>   
  <a href="#">Link 3</a>   
  <a href="#">Link 4</a>   
  <a href="#" id="ham-icon">Link 5</a>
</nav>

<!-- Topnav -->
<div class="w3-topnav topnav w3-center w3-theme w3-card-4 w3-top">

  <div class="left">
    <h2>Ravindra Bhawan</h2>
  </div>


  <div class="right">
  <?php 
    session_start();

    if(isset($_SESSION['name'])) {
      $name = $_SESSION['name'];
      echo "welcome " . $_SESSION['name'] . "!  <br>";
      if($name == 'admin') {
        echo '<a class="flex-item" href="./admin/">Complaints</a>';
        echo '<a class="flex-item" href="./complaint/">Complaint Box</a>';
      }else {
        echo '<a class="flex-item" href="./complaint/">Complaint Box</a>';
      }
      echo '<a class="flex-item btn-em" href="./session/unset.php">Logout</a>';

    } else {
      echo '<p style="margin: 0">Please Login</p>';
      echo '<a class="flex-item" href="./authentication/form.php">Sign Up</a>';
      echo '<a class="flex-item btn-em" href="./authentication/">Sign in</a>';
    }
  ?>
  </div>
</div>




<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
    <!-- SLIDES -->
        <div data-p="225.00" style="display: none;">
            <img data-u="image" src="img/DSC_0031.JPG" />
        </div>
        <div data-p="225.00" style="display: none;">
            <img data-u="image" src="img/IMG_20160404_151237769.jpg" />
        </div>
        <div data-p="225.00" style="display: none;">
            <img data-u="image" src="img/IMG_20160404_151257158-min.jpg" />
        </div>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
        <!-- bullet navigator item prototype -->
        <div data-u="prototype" style="width:16px;height:16px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
</div>


<!-- Description -->

<div class="container-fluid desc">
  
  <div class="container">
      <h2>About Us</h2>
      <p>
        "Ravindra Bhawan was established as Engineer Student's Hostel. It was inaugurated by Shri V.V.Giri, Chancellor of the then University of Roorkee (now Indian Institute of Technology Roorkee) & Governor of Uttar Pradesh on the auspicious day of Tuesday, the November 24th in the year 1959. According to hindi calendar this day was 3 Margshirsha 1881 (Saka).
  Since then Ravindra Bhawan has always occupied an important place among all the hostels of this coveted campus. It has been home for all the 4th yearites till 2003. In the August of 2003 when all the hostels were jumbled, 2nd & 3rd yearites too got chance to occupy room in this centrally located hostel. It marked a phase change in Ravindra Bhawan's history. Its now colourful student community is bound to take Ravindra Bhawan to new heights. The Bhawan has been recently provided with Wi-Fi and LAN facility in each room. Cyber Cafe, Gym Room and T.T. Room facilities have been provided since 2004. The capacity of the Bhawan has been increased by 72 rooms by adding 03 new wings in August, 2007"
      </p>
  </div>  

</div>

<!-- FACILITIES -->
<div class="facil w3-container">
      <h2>Facilities</h2>
      
<div class="w3-row-padding row">

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/barber.jpg" alt="Person" style="width:100%">
    <div class="w3-container">
    <h4 style="text-aling: center">Barber Shop</h4>

    </div>
  </div>
</div>

</div>

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/canteen.gif" alt="Person" style="width:100%; margin-bottom: 52px;">
    <div class="w3-container">
    <h4>Canteen</h4>

    </div>
  </div>
</div>

</div>

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/indoorgames.jpg" alt="Person" style="width:100%; margin-bottom: 60px;">
    <div class="w3-container">
    <h4>Indoor Sports</h4>
 
    </div>
  </div>
</div>

</div>

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/music.jpg" alt="Person" style="width:100%; margin-bottom: 50px;">
    <div class="w3-container">
    <h4 style="position: relative; top: -37px">Music Teacher</h4>
 
    </div>
  </div>
</div>

</div>

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/out.png" alt="Person" style="width:100%">
    <div class="w3-container">
    <h4 style="position: relative; top: -8px;">Sports Ground</h4>
 
    </div>
  </div>
</div>

</div>
</div> <!-- first row end -->


<div class="w3-row-padding row" style="margin-top: 90px;">
  


<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/stationary.jpg" alt="Person" style="width:100%; margin-bottom: 15px;">
    <div class="w3-container">
    <h4>Stationary Shop</h4>
 
    </div>
  </div>
</div>

</div>

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/str.jpg" alt="Person" style="width:100%; margin-bottom: 5px;">
    <div class="w3-container">
    <h4>Bhawan Gym</h4>
 
    </div>
  </div>
</div>

</div>

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/tailor.jpg" alt="Person" style="width:100%; margin-bottom: 25px;">
    <div class="w3-container">
    <h4>Tailor Shop</h4>
 
    </div>
  </div>
</div>

</div>

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/tv.png" alt="Person" style="width:100%; margin-bottom: 40px;">
    <div class="w3-container">
    <h4>TV Room</h4>
 
    </div>
  </div>
</div>

</div>

<div class="w3-col w3-container" style="width:20%">

<div class="w3-col m2 l2">
  <div class="w3-card-2 card">
    <img src="img/facil/wash.jpg" alt="Person" style="width:100%; margin-bottom: 30px;">
    <div class="w3-container">
    <h4 style="width: 130%;">Washing Machine</h4>
 
    </div>
  </div>
</div>

</div>

</div>


</div> <!-- Container end -->
</div> <!-- FACILITIES END -->

<!-- Gallery -->
<div class="gallery">
<h2 class="galh2">Gallery</h2>

<!-- Gallery New -->


        <div class="docs-galley">
          <ul class="docs-pictures clearfix">

            <li><img src="img/gallery/gal11.jpg" alt="Picture 2"></li>
            <li><img src="img/gallery/gal2.jpg" alt="Picture 2"></li>
            <li><img src="img/gallery/gal3.jpg" alt="Picture 3"></li>
            <li><img src="img/gallery/gal4.jpg" alt="Picture 3"></li>
            <li><img src="img/gallery/gal5.jpg" alt="Picture"></li>
            <li><img src="img/gallery/gal6.jpg" alt="Picture 2"></li>
            <li><img src="img/gallery/gal7.jpg" alt="Picture 3"></li>
            <li><img src="img/gallery/gal8.jpg" alt="Picture 3"></li>
            <li><img src="img/gallery/gal9.jpg" alt="Picture"></li>
            <li><img src="img/gallery/gal10.jpg" alt="Picture 2"></li>
          </ul>
        </div>
<br>
</div>




<!-- CW -->
<!-- Row -->
<div class="w3-row CW">

<div class="w3-half CW-port">
<br>
<h2>My Portfolio</h2>
<h4 id="words">I am delighted to know that the Ravindra Bhawan inmates have worked hard to revamp their own Website. This, I hope, will add value to their life and creativity during their stay at the Bhawan. At the same time, it will keep the whole institute community abreast with the activities and initiatives of the Ravindra Bhawan. While conveying my hearty wishes on this occasion to all the students, I would also like to solicit their whole hearted involvement in different activities and initiatives of the Bhawan in future.<br><br>
It is heartening to note that the New interactive Website of Ravindra Bhawan is being launched on eve of Bhawan Day 2016. The web developer team deserves to be congratulated for their brilliant efforts. I wish all inmates of Ravindra Bhawan a homely stay in the Bhawan and prosperous and bright future. </h4>
<br>
 <footer>
  <h4>Dr. Manoj Jain</h4><h4>Chief Warden, Ravindra Bhawan</h4>
 </footer>
</div>

<div class="w3-half">
<div class="w3-card-2 w3-white">
  <img src="CW.jpg" alt="Vernazza" style="width:100%; height:100% ">
</div>
</div>
</div>

<!-- Team -->
<!-- Container -->
<div class="w3-container w3-padding-64 w3-center team">
<h2>Bhawan Council</h2>
<p>Meet Our Team</p> 
        
<div class="w3-row test"><br>

<div class="w3-quarter">
  <img src="antriksh.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Antriksh Saxena</h3>
  <p>Technical Secretary</p>
</div>

<div class="w3-quarter">
  <img src="manohar.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Battula Manohar</h3>
  <p>Maintenance Secretary</p>
</div>

<div class="w3-quarter">
  <img src="ajay.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Ajay Kumar</h3>
  <p>Social & Cultural Secretary</p>
</div>

<div class="w3-quarter">
  <img src="murtu.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Murtuza Merchant </h3>
  <p>Mess Secretary</p>
</div>
<div class="w3-quarter">
  <img src="anant.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Anant Dev</h3>
  <p>Maintenance Secretary</p>
</div>
<div class="w3-quarter">
  <img src="amanpal.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Aman Pal</h3>
  <p>Sports Secretary</p>
</div>

</div>
</div>

<!-- Team end here -->



<!-- Container -->
<div class="w3-container w3-padding-64">
  <h2 class="w3-padding-bottom">Contact Us</h2>
  <div class="w3-row">
    <div class="w3-col m5">
      <h3>Address</h3>
      <p><i class="fa fa-map-marker w3-xlarge" style="color: #3B7935;"></i>  IIT Roorkee, Uttrakhand</p>
      <p><i class="fa fa-phone w3-xlarge" style="color: #3B7935;"></i>  +91 7060334112</p>
      <p><i class="fa fa-envelope-o w3-xlarge" style="color: #3B7935;"></i>  ravindrabhawan@iitr.ac.in</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container">
      <div class="w3-group">      
        <input class="w3-input" style="width:100%;" type="text" required>
        <label class="w3-label" style="color: #3B7935;">Name</label>
      </div>
      <div class="w3-group">      
        <input class="w3-input" style="width:100%;" type="text" required>
        <label class="w3-label" style="color: #3B7935;">Email</label>
      </div>
      <div class="w3-group">      
        <textarea class="w3-input" style="width:100%;"></textarea>
        <label class="w3-label" style="color: #3B7935;">Subject</label>
      </div>  
      <input class="w3-check" type="checkbox" checked="checked">
      <label class="w3-validate" style="color: #3B7935;">I Like it!</label>
      <button type="button" class="w3-btn w3-right" style="background: #3B7935;">Send</button>
      </form>
    </div>
  </div>
</div>




<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center">

<!-- Google Maps -->
<!-- <iframe class="google-maps" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="20%" height="220" src="https://maps.google.com/maps?hl=en&q=Ravindra Bhawan IIT Roorkee&ie=UTF8&t=roadmap&z=10&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com"><a></small></div><div><small><a href="http://googlemapsgenerator.com">googlemapsgenerator.com</a></small></div></iframe> -->

  <h4>Follow Us</h4>
  <a class="w3-btn-floating" style="background: #14420f;" target="_blank" href="http://www.iitr.ac.in" title="Home"><i class="fa fa-home"></i></a>
  <a class="w3-btn-floating"  style="background: #14420f;" target="_blank" href="https://www.facebook.com/groups/RavindraBhawan14/" title="Facebook"><i class="fa fa-facebook"></i></a>
  <!-- <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a> -->
  <p>&copy; Copyright 2016</p>     

  <div style="position:relative;bottom:103px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding" style="background: #14420f;">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>        
</footer>

</body>
</html>