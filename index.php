<!DOCTYPE html>
<html>
<title>Demo W3.CSS</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- magnific -->
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="./magnific/magnific-popup.css">

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="https://code.jquery.com/jquery-1.12.0.js"></script>

<!-- Magnific Popup core JS file -->
<script src="./magnific/jquery.magnific-popup.js"></script>

<!--  -->

<style>
.test img {cursor: pointer;border: 10px solid transparent;}
.test img:hover {border: 10px solid #f1f1f1;}
.w3-topnav a:first-child:hover{color: #009688;border-bottom: 3px solid transparent;}
/* static topnav for screens below 601px width */
@media only screen and (max-width: 601px) {.w3-topnav {position:static;}}

.gallery img {
  height: 200px;
  width: 256px;
  float: lef

}



</style>
<style type="text/css">
	
	.left {
		float: left;
	}

	.right {
		float: right;
	}

	.flex-item {

		flex: 1;
	}

  .btn-em {
    border: 1px solid white;
    background: white;
    color: black;

  }
  .google-maps {
    float: left;
  }
</style>

<body id="myPage">

<!-- Side Navigation on click -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2">
  <a href="javascript:void(0)" 
  onclick="w3_close()"
  class="w3-closenav w3-xxxlarge w3-text-teal">Close X</a>
  <a href="javascript:void(0)">Link 1</a>		
  <a href="javascript:void(0)">Link 2</a>		
  <a href="javascript:void(0)">Link 3</a>		
  <a href="javascript:void(0)">Link 4</a>		
  <a href="javascript:void(0)" id="ham-icon">Link 5</a>

</nav>

<!-- Topnav -->
<div class="w3-topnav w3-center w3-theme w3-card-4 w3-top" style="display: flex">
 	
 	<div class="left">
      <span class="w3-opennav w3-xlarge flex-item" onclick="w3_open()">&#9776;</span>		
  </div>

  <h2 class="flex-item" style="display: inline;margin-left: 8%;">Ravindra Bhawan</h2>

  <div class="right">
    
  <?php 
    session_start();

    if(isset($_SESSION['name'])) {
      echo "welcome " . $_SESSION['name'] . "!  <br>";
      echo '<a class="flex-item btn-em" href="./session/unset.php">Logout</a>';

    } else {


      echo "please Login properly";
      echo '<a class="flex-item" href="./authentication/form.php">Sign Up</a>';
      echo '<a class="flex-item btn-em" href="./authentication/">Sign in</a>';
    }
  ?>

 	</div>
</div>




<!-- jumbotron -->
<!-- <div class="w3-image w3-animate-opacity">
  <img class="testimg" src="imgs/iitr.jpg" alt="boat" style="width:100%;min-height:550px;max-height:700px;">
  <div class="w3-title w3-margin-64">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-animate-opacity w3-btn w3-xlarge w3-theme" title="Go To W3.CSS">LEARN W3.CSS</button>
  </div>
</div> -->


<!-- slider -->

    <!-- // <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> -->
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="https://i.ytimg.com/vi/tWhscdT3NNM/maxresdefault.jpg" />
<!--                 <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div> -->
<!--                 <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div> -->
<!--                 <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img src="img/c-phone.png" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" />
                    <img src="img/c-jssor-slider.png" data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" />
                    <img src="img/c-text.png" data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" />
                    <img src="img/c-fruit.png" data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" />
                    <img src="img/c-navigator.png" data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" />
                </div> -->
<!--                 <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img src="img/c-phone-horizontal.png" style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img src="img/c-slide-1.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" />
                        <img src="img/c-slide-3.jpg" data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" />
                    </div>
                    <img src="img/c-navigator-horizontal.png" style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" />
                    <img src="img/c-finger-pointing.png" data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" />
                </div> -->
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="https://i.ytimg.com/vi/8SA-uV3VPt8/maxresdefault.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="https://pniiitr.files.wordpress.com/2015/06/333857_317160391637978_962820756_o.jpg" />
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


<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-top">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">×</span>
        <h4>Oh snap! We just showed you a modal..</h4>
        <h5>Because we can <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-container">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal footer</p>
      </footer>
    </div>
</div>



<!-- Container -->
<div class="w3-container w3-padding-64 w3-center">
<h2>OUR TEAM</h2>	
<p>Meet the team - our office rats:</p>
				
<div class="w3-row test"><br>

<div class="w3-quarter">
  <img src="http://www.iitr.ac.in/Placements/pages/img/director.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Johnny Walker</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="https://i.ytimg.com/vi/cr06YKd1Ge8/hqdefault.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
</div>

<div class="w3-quarter">
  <img src="http://www.funonline.in/wp-content/uploads/2011/12/Mr.-Bean-Cartoon-Image-e1325062564925.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Jan Ringo</h3>
  <p>Boss man</p>
</div>

<div class="w3-quarter">
  <img src="https://i.ytimg.com/vi/VXzZGCnf3yY/hqdefault.jpg" alt="Boss" style="width:50%" class="w3-circle">
  <h3>Kai Ringo</h3>
  <p>Fixer</p>
</div>

</div>
</div>


<!-- here -->

<!-- Gallery -->
<div class="w3-container w3-padding-64 w3-center" style="background: lightgrey;">
	
	<div class="parent-container gallery">
		<h2>Gallery</h2>
    <a href="http://www.vpforums.org/index.php?app=downloads&module=display&section=screenshot&record=11006&id=6026&full=1"><img src = "http://foto.hrsstatic.com/fotos/0/3/256/256/80/000000/http%3A%2F%2Ffoto-origin.hrsstatic.com%2Ffoto%2F2%2F1%2F4%2F4%2F214448%2F214448_t_344925.jpg/UaePvv4CqLbNCpQyWHtHWQ%3D%3D/256,255/6/Gran_Hotel_Torre_Catalunya_Hotel_Spa-Barcelona-Conference_room-1-214448.jpg"></a>

		<a href="http://media.npr.org/assets/img/2013/02/07/mrbean072way_wide-bfaafef77349a2c9101d90e3eabe182a7fd1875f.jpg?s=1400"><img src = "http://foto.hrsstatic.com/fotos/0/3/256/256/80/000000/http%3A%2F%2Ffoto-origin.hrsstatic.com%2Ffoto%2F2%2F1%2F4%2F4%2F214448%2F214448_t_344925.jpg/UaePvv4CqLbNCpQyWHtHWQ%3D%3D/256,255/6/Gran_Hotel_Torre_Catalunya_Hotel_Spa-Barcelona-Conference_room-1-214448.jpg"></a>

		<a href="https://yt3.ggpht.com/-FvBjR0DHn0c/AAAAAAAAAAI/AAAAAAAAAAA/1X7Fl-w2PUw/s900-c-k-no/photo.jpg"><img src = "http://foto.hrsstatic.com/fotos/0/3/256/256/80/000000/http%3A%2F%2Ffoto-origin.hrsstatic.com%2Ffoto%2F2%2F1%2F4%2F4%2F214448%2F214448_t_344925.jpg/UaePvv4CqLbNCpQyWHtHWQ%3D%3D/256,255/6/Gran_Hotel_Torre_Catalunya_Hotel_Spa-Barcelona-Conference_room-1-214448.jpg"></a>

		<a href="http://www.elasperger.org/wp-content/uploads/2013/10/atkinson-says-goodbye-to-beloved-character-mr-bean1.jpg"><img src = "http://foto.hrsstatic.com/fotos/0/3/256/256/80/000000/http%3A%2F%2Ffoto-origin.hrsstatic.com%2Ffoto%2F2%2F1%2F4%2F4%2F214448%2F214448_t_344925.jpg/UaePvv4CqLbNCpQyWHtHWQ%3D%3D/256,255/6/Gran_Hotel_Torre_Catalunya_Hotel_Spa-Barcelona-Conference_room-1-214448.jpg"></a>

	</div>
</div>


<!-- Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1">

<div class="w3-quarter">
<h2>Our Portfolio</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="http://gencept.com/wp-content/uploads/2012/10/Beautiful-Houses-Week32_E4-House-by-DADA-Partners_01.jpg" alt="Vernazza" style="width:100%">
  <div class="w3-container">
  <h3>Customer 1</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="http://41.media.tumblr.com/c6af38bc95b974b082f9374d4af5d254/tumblr_nwq4u6CHZh1uboj78o1_1280.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>Customer 2</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="http://cdn.freshome.com/wp-content/uploads/2010/08/cheap_exterior_home.jpg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>Customer 3</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

</div>



<!-- Container -->
<div class="w3-container w3-padding-64">
  <h2 class="w3-padding-bottom">Contact Us</h2>
  <div class="w3-row">
    <div class="w3-col m5">
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container">
      <div class="w3-group">      
        <input class="w3-input" style="width:100%;" type="text" required>
        <label class="w3-label w3-validate">Name</label>
      </div>
      <div class="w3-group">      
        <input class="w3-input" style="width:100%;" type="text" required>
        <label class="w3-label w3-validate">Email</label>
      </div>
      <div class="w3-group">      
        <textarea class="w3-input" style="width:100%;"></textarea>
        <label class="w3-label">Subject</label>
      </div>  
      <input class="w3-check" type="checkbox" checked="checked">
      <label class="w3-validate">I Like it!</label>
      <button type="button" class="w3-btn w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>




<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme w3-center">

<!-- Google Maps -->
<iframe class="google-maps" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="20%" height="220" src="https://maps.google.com/maps?hl=en&q=Ravindra Bhawan IIT Roorkee&ie=UTF8&t=roadmap&z=10&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com"><a></small></div><div><small><a href="http://googlemapsgenerator.com">googlemapsgenerator.com</a></small></div></iframe>

  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Rss"><i class="fa fa-rss"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>© Copyright whatever</p>			

  <div style="position:relative;bottom:103px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>				
</footer>

<!-- Script For Side Navigation -->
<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.width = "300px";
    document.getElementsByClassName("w3-sidenav")[0].style.textAlign = "center";
    document.getElementsByClassName("w3-sidenav")[0].style.fontSize = "40px";
    document.getElementsByClassName("w3-sidenav")[0].style.paddingTop = "10%";
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>


<script type="text/javascript">
	$("#ham-icon").click(function() {


	});
</script>

<script type="text/javascript">
	$(document).ready(function(){

		$('.image-link').magnificPopup({type:'image'});

		$('.test-popup-link').magnificPopup({
		  type: 'image'
		  // other options
		});

		$('.parent-container').magnificPopup({
		  delegate: 'a', // child items selector, by clicking on it popup will open
		  type: 'image',
		  gallery: {enabled: true}
		  // other options
		});

});
</script>

</body>
</html>