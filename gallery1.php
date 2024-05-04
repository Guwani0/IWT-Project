<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title> Gallery </title>
        <link rel="stylesheet" href="styles/gall.css">
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>

    <?php

    require 'header.php';

    ?>
        
      
    <div class="head">
          <div class="t1">
            <header class="gallery">Gallery</header>
          </div>
    <h1>photos</h1>
    <!--see more icon-->
    <h2 >see more...</h2>
  </div>


  
 <!--photo container-->
 <div class="product-container">
     <div class="pic">
       <img src="images/R.jpeg" alt="">
       <h3>2023 highlights</h3>
       <div class="content">
          <i class='bx bxs-camera'></i>
          <a class="ll" href="highlights.html">20 more photos</a>
       </div>
      </div>
     <div class="pic">
       <img src="images/red.webp" alt="">
       <h3>Red Carpet</h3>
       <div class="content">
          <i class='bx bxs-camera'></i>
          <a href="redcarpet.html">20 photos</a>
       </div>
      </div>
     <div class="pic">
       <img src="images/perf.jpeg" alt="">
       <h3>IMA Performense</h3>
       <div class="content">
         <i class='bx bxs-camera'></i>
          <a href="performence.html">20 photos</a>
       </div>
     </div>
  </div>

  <!--vidios-->
  <div class="vidios">
    <h1>Videos</h1>
    <h2>see more...</h2>
   </div>

   <div class="product-container">

       <div class="vid">
         <video src="video/4.mp4" controls autoplay mutes class="vv2"></video>
         <h3>Performances Highlight </h3>
          <div class="content">
            <i class='bx bxs-video'></i>
             <a href="performencehlight.html">5 Videos</a>
           </div>
        </div>
    

        <div class="vid">
            <video src="video/6.mp4" controls autoplay muted class="vv2"></video>
             <h3>Winners 2023</h3>
          <div class="content">
            <i class='bx bxs-video'></i>
              <a href="winners.html">5 Videos</a>
           </div>
        </div>

    <div class="vid">
          <video src="video/4.mp4" controls autoplay muted class="vv2"></video>
         <h3>Host Rewind</h3>
          <div class="content">
            <i class='bx bxs-video'></i>
               <a href="hostrewind.html">5 Videos</a>
           </div>
      </div>
   </div>   



    </body>
</html>