<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="stylish.css">
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root {
      --main-color: #be44ad;
      --black: #222;
      --white: #f4f4f4;
      --light-black: #777;
      --border: 0.1rem solid var(--black);
      --box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      outline: none;
      text-decoration: none;
      text-transform: capitalize;
    }

    html {
      font-size: 62.5%;
      overflow-x: hidden;
    }

    section {
      padding: 5rem 10%;
    }
/* 
    /*
    /* .home {
      padding: 0;
    }

    .home-slider {
      width: 100%;
    }

    .swiper-slide {
      height: 100vh;
      background-size: cover;
      background-position: center;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .swiper-slide .content {
      text-align: center;
      color: white;
      text-shadow: 2px 2px 5px black;
    }

    .swiper-slide .content span {
      font-size: 2.5rem;
      display: block;
    }

    .swiper-slide .content h3 {
      font-size: 5rem;
      margin: 1rem 0;
    } */


    .header .logo{
    font-size: 2.5rem;
    color:var(--black);
}
section{
    padding: 5rem 10%;
}
.header .navbar a {
  font-size: 2rem;
  margin-left: 2rem;
  color: var(--black);
}
.header .navbar a:hover {
    color: var(--main-color);
}

#menu-btn {
    font-size: 2.5rem;
    cursor: pointer;
    color: var(--black);
    display: none;
}
    /* Responsive CSS */
    @media (max-width: 991px) {
      html {
        font-size: 55%;
      }

      section {
        padding: 3rem 2rem;
      }
    }

    @media (max-width: 768px) {
      #menu-btn {
        display: inline-block;
      }

      .header .navbar {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--white);
        border-top: var(--border);
        padding: 2rem;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        pointer-events: none;
        opacity: 0;
        transition: 0.3s ease-in-out;
      }

      .header .navbar.active {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        pointer-events: auto;
        opacity: 1;
      }

      .header .navbar a {
        display: block;
        margin: 2rem 0;
        text-align: center;
      }
    }

    @media (max-width: 450px) {
      html {
        font-size: 50%;
      }
    }


   
 .heading-title{

text-align: center;

margin-bottom: 3rem;

font-size: 6rem;

text-transform: uppercase;

color:var(--black);
} 
/* .home .slide .content h3{

font-size: 6vw;

color:var(--white);

text-transform: uppercase;

line-height: 1;

text-shadow: var(--text-shadow);

padding:1rem 0;
animation:fadeIn .2s linear backwards .4s;

}

@keyframes fadeIn {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
} */  


/* 
.home{


padding: 6rem  10%;
background: url("fantasy-style-entryway-door-with-desert-landscape.jpg") no-repeat;
} */

/* .home  .slide{

text-align:center ;

padding:2rem;

display: flex;

align-items: center;

justify-content: center;

background-size: cover !important;

background-position:  !important;
min-height:60vh;
width: 100%;
} */
   
    section.home {
      padding: 0;
    }

    .home .swiper {
      width: 100%;
      height: 100vh;
    }

    .home .swiper-slide {
      position: relative;
      width: 100%;
      height: 100%;
      background-size: cover !important;
      background-position: center !important;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .home .swiper-slide .content {
      max-width: 70rem;
      color: var(--white);
      text-shadow: var(--text-shadow);
      animation: fadeIn 1s ease forwards;
    }

    .home .swiper-slide .content span {
      font-size: 2.5rem;
      display: block;
      margin-bottom: 1rem;
      animation: fadeIn 0.5s ease forwards;
    }

    .home .swiper-slide .content h3 {
      
      animation: fadeIn 2s ease forwards;
      
font-size: 6vw;

color:var(--white);

text-transform: uppercase;

line-height: 1;

text-shadow: var(--text-shadow);

padding:1rem 0;
animation:fadeIn .2s linear backwards .4s;

}
    

    .home .swiper-slide .btn {
      display: inline-block;
      background: var(--black);
      color: var(--white);
      padding: 1rem 3rem;
      font-size: 1.8rem;
      cursor: pointer;
      transition: 0.3s;
      animation: fadeIn 2s ease forwards;
    }

    .home .swiper-slide .btn:hover {
      background: var(--main-color);
    }

    .swiper-button-next,
    .swiper-button-prev {
      color: #fff;
      transition: 0.3s;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
      color: var(--main-color);
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .home .swiper-slide .content h3 {
        font-size: 3.5rem;
      }
.swiper-button-next,
    .swiper-button-prev{
      display:none;
    }
      .home .swiper-slide .content span {
        font-size: 2rem;
      }

      .home .swiper-slide .btn {
        font-size: 1.6rem;
      }
    }

  </style>

</head>
 <section class="header">
    <a href="home.php" class="logo">Travel.</a>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <!-- Home Swiper Section -->
  <section class="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide" style="background:url('3d-paradise-landscape-wallpaper.jpg') no-repeat center/cover;">>
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url('hot-air-balloon-adventure.jpg') no-repeat center/cover;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url('coastal-landscape-fantasy-style.jpg') no-repeat center/cover;">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your trip worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>







<!-- service section -->
<div class="service">
  <h1 class="heading-title">our service</h1>
  <div class="box-container">

    <div class="box">
 <img src="mountains.png" alt="">
       <h3>advanture</h3>
    </div>

    <div class="box">
    <img src="map.png" alt="">
       <h3>tour guide</h3>
    </div>


    <div class="box">
    <img src="off.png" alt="">
       <h3>trekking</h3>
    </div>



    <div class="box">
    <img src="fire.png" alt="">
       <h3>camp fire</h3>
    </div>


    <div class="box">
    <img src="jeep.png" alt="">
       <h3>off road</h3>
    </div>


    <div class="box">
    <img src="tent.png" alt="" style="background-size:cover" >
       <h3>camping</h3>
    </div>
</div>
  
</div>

<!-- home about section starts-->
<section class="home-about">

<div class="image">
 

<img src="best-friends-staying-together-outside.jpg" alt="">
</div>
<div class="content">

<h3>about us</h3>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit nodi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxine sapiente autem ipsum? Nobis,

provident voluptate?</p>

<a href="about.php" class="btn"> read more</a>

 </div>
</section>



<!-- home packages section starts -->

<!-- <section class="home-package">

    <h1 class="heading-title"> our packages </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="tajmahal-4595871_1280.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="knowledge-3255140_1280.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="evergreen-2025158_1280.png" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>



</div>


<div class="load-more"><a href="package.php">load more</a></div>

</section> -->
<section class="home-package">

    <h1 class="heading-title"> Our Pakages </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="our1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="our2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="our3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div> <!-- ✅ Correctly closed box-container -->

    <div class="load-more">
        <a href="package.php" class="btn">load more</a>
    </div>

</section> <!-- ✅ Correctly closed section -->


<!-- home packages section ends -->
<section class="home-offer">
  <div class="content">
    <h3>upto 50% off</h3>
    <p>lorem ipsum dolor sit, amet consecteturadipisicing elit. lure tempora assumenda, debitis sliquid nesciunt maiores quas mangni cumque quaeratbsaepe</p>
    <a href="book.php" class="btn">book now</a>
  </div>
</section>

<!-- home offer secti -->





















<footer class="footer">
  <div class="box-container">
    <div class="box">
      <h3>quick links</h3>
      <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
      <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
      <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
      <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
    </div>


    <div class="box">
      <h3>extra links</h3>
      <a href=""><i class="fas fa-angle-right"></i>ask questions</a>
      <a href=""><i class="fas fa-angle-right"></i>about us</a>
      <a href=""><i class="fas fa-angle-right"></i>private policy</a>
      <a href=""><i class="fas fa-angle-right"></i>tearms of use</a>
    </div>

    
   <div class="box">
      <h3>contact info</h3>
      <a href=""><i class="fas fa-phone"></i>+91-747-031-8527</a>
      <a href=""><i class="fas fa-phone"></i>+91-966-959-1425</a>
      <a href=""><i class="fas fa-envelope"></i>hanshsingh77@gmail.com</a>
      <a href=""><i class="fas fa-map"></i>mp, india - 46547</a>
   </div>

      <div class="box">
      <h3>follow us</h3>
      <a href=""><i class="fa-brands fa-facebook"></i>facebook</a>
      <a href=""><i class="fa-brands fa-twitter"></i>twitter</a>
      <a href=""><i class="fa-brands fa-instagram"></i>instagram</a>
      <a href=""><i class="fa-brands fa-linkedin"></i>linkedin</a>
      
      </div>
      
  </div>

  <div class="creadit"> created by <span> mr.hemraj singh </span> all right reserved</div>
</footer>



<!-- swiper js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="inter.js" ></script>
<script>
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');

    menu.onclick = () => {
      menu.classList.toggle('fa-times');
      navbar.classList.toggle('active');
    };

    window.onscroll = () => {
      menu.classList.remove('fa-times');
      navbar.classList.remove('active');
    };

    var swiper = new Swiper(".swiper-slide", {
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  
    
  </body>
  </html>