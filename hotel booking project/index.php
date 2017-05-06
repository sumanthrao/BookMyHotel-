

<?php include('header.php'); ?>
<!DOCTYPE html>
<body ><br><br>
   
                <div class="slideshow-container" style="backg">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="beach1.jpg" style="width:850px; height:350px ">
  <div class="text">Enjoy the colorful moments with friends in beaches across india!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="slide5.jpeg" style="width:850px; height:350px">
  <div class="text">Experience world-class luxury hotels </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="image13.jpg" style="width:850px; height:350px; align:middle;">
  <div class="text">Home away from home luxury hotels</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="slide3.jpeg" style="width:850px; height:350px; align:middle;">
  <div class="text">Experience world-class luxury hotels</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="slide2.jpg" style="width:850px; height:350px; align:middle;">
  <div class="text">Home away from home luxury hotels</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="slide4.jpg" style="width:850px; height:350px; align:middle;">
  <div class="text">Experience world-class luxury hotels</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

              <div ><br><br>
                <a href="listings.php" class="book-button" >
                    BOOK NOW
                </a>
            
         

            <div id="content"><br>
                <div id="feature">
                    <p><h1>You'll find some great offers here.</h1></p>
                    
                </div >
                <div class="offers">
                <div class="article column1">
                    <a href=package.php><img  src="beachoffer.jpg" class="images" width="300px" height="150px"></a>
                </div>
                <div class="article column2">
                    <a href=package.php><img src="45off.jpg" class="images" width="300px" height="150px"></a>
                </div>
                <div class="article column3">
                    <a href=package.php><img src="greatdeals.jpg" class="images" width="300px" height="150px"></a>
                </div>
                 <div class="article column4">
                  <a href=package.php>  <img src="off2.jpg" class="images" width="300px" height="150px"></a>
                </div>
            </div>
          
            </div>
            <div id="about us">
                <h3 style="text-align:center">
                    < This Website is developed by /><br>
                    < Sumanth ,Sumeet and Srinivas >
                    Pesu CSE  
                </h3><br><br>
                <h3 style="text-align:center">
                    About Us
                </h3>
                <p>
                    we Offer service in <br>
                    <ul><li>Travels</li>
                    <li>Hotels</li>
                    <li>Tourist packages</li>
                    <li>Homestays</li>
                    <li>Foreign trips</li>
                    <li>Foreign hotels</li></ul>
                </p>
                </div>

            <div id="footer" style="margin-top:50px">
                <p><a href="cancellation.html" style="color:grey;text-decoration:none;margin-top:10%;">Privacy Policy</a></p>
            </div><script>
            
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

        </div>
</body>
</html>