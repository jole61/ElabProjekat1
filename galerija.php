<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/slider.css">
   <?php
        include('navbar.php');
    ?>
   <title>VECANINE TORTE</title>
   <!-- Set-Cookie: CookieName=CookieValue; SameSite=Lax; -->
</head>
<body>
<div class="text-hero">
         <div class="circle-logo">
            <img src="images/logo.png" alt="logo">
         </div>
         <h1>Galerija</h1>
         
         <button id="btnScroll">next</button>
      </div>
</div>
   
    <!-- Container for the image gallery -->
<div class="container-slider">

   <!-- Full-width images with number text -->
   <div class="mySlides">
     <div class="numbertext">1 / 12</div>
      <img src="images/galery/1.jpg">
   </div>
 
   <div class="mySlides">
     <div class="numbertext">2 / 12</div>
     <img src="images/galery/2.jpg">
   </div>
 
   <div class="mySlides">
     <div class="numbertext">3 / 12</div>
     <img src="images/galery/3.jpg">
   </div>
 
   <div class="mySlides">
     <div class="numbertext">4 / 12</div>
     <img src="images/galery/4.jpg">
   </div>
 
   <div class="mySlides">
     <div class="numbertext">5 / 12</div>
     <img src="images/galery/5.jpg">
   </div>
   <div class="mySlides">
     <div class="numbertext">6 / 12</div>
     <img src="images/galery/6.jpg">
   </div>
   <div class="mySlides">
      <div class="numbertext">7 / 12</div>
      <img src="images/galery/7.jpg">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 / 12</div>
      <img src="images/galery/8.jpg">
    </div>
    <div class="mySlides">
      <div class="numbertext">9 / 12</div>
      <img src="images/galery/9.jpg">
    </div>
    <div class="mySlides">
      <div class="numbertext">10 / 12</div>
      <img src="images/galery/10.jpg">
    </div>
    <div class="mySlides">
      <div class="numbertext">11 / 12</div>
      <img src="images/galery/11.jpg">
    </div>
    <div class="mySlides">
      <div class="numbertext">12 / 12</div>
      <img src="images/galery/12.jpg">
    </div>
   
 
   <!-- Next and previous buttons -->
   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>
 
   <!-- Image text -->
   <!-- <div class="caption-container">
     <p id="caption"></p>
   </div> -->
 
   <!-- Thumbnail images -->
   <div class="row">
     <div class="column">
       <img class="img-thumb cursor" src="images/galery/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
     </div>
     <div class="column">
       <img class="img-thumb cursor" src="images/galery/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
     </div>
     <div class="column">
       <img class="img-thumb cursor" src="images/galery/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
     </div>
     <div class="column">
       <img class="img-thumb cursor" src="images/galery/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
     </div>
     <div class="column">
       <img class="img-thumb cursor" src="images/galery/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
     </div>
     <div class="column">
       <img class="img-thumb cursor" src="images/galery/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
     </div>
     <div class="column">
      <img class="img-thumb cursor" src="images/galery/7.jpg" style="width:100%" onclick="currentSlide(7)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="img-thumb cursor" src="images/galery/8.jpg" style="width:100%" onclick="currentSlide(8)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="img-thumb cursor" src="images/galery/9.jpg" style="width:100%" onclick="currentSlide(9)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="img-thumb cursor" src="images/galery/10.jpg" style="width:100%" onclick="currentSlide(10)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="img-thumb cursor" src="images/galery/11.jpg" style="width:100%" onclick="currentSlide(11)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="img-thumb cursor" src="images/galery/12.jpg" style="width:100%" onclick="currentSlide(12)" alt="Snowy Mountains">
    </div>
    </div>
   
    <?php
        include('footer.php');
    ?>
<!--scripts-->
<script type="text/javascript" src="js/js-slider.js"></script>
</body>
</html>