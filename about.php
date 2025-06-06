<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="stylish.css">
  <style>

    
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root {
    --main-color: #Be44ad;
    --black: #222;
    --white:#f4f4f4;
    --light-black: #777;
    --light-white: #fff9;
    --dark-bg: rgba(0, 0, 0, 0.7);
    --light-bg: #eee;
    --border: 0.1rem solid var(--black);
    --box-shadow: 0 .5rem 1rem rgba(0,0,0,0.1);
    --text-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.3);
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

html::-webkit-scrollbar {
    --width:0.1rem;
}

html::-webkit-scrollbar-track {
    background-color:var( --white);
}

html::-webkit-scrollbar-thumb {
    background-color: var(--main-color);
}
  section.home {
      padding: 0;
    }
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
      background:#eee;
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

      .home .swiper-slide .content span {
        font-size: 2rem;
      }

      .home .swiper-slide .btn {
        font-size: 1.6rem;
      }
    }


.reviews-slider {
  padding: 60px 5%;
  background:white;
  text-align: center;
  overflow: hidden;
}

.reviews-slider .w {
  display: flex;
  gap: 2.5rem;
  flex-wrap: nowrap;
  overflow-x: auto;
  background: white:
  scroll-snap-type: x mandatory;
  padding-bottom: 1rem;
}

.reviews-slider .w::-webkit-scrollbar {
  height: 8px;
}
.reviews-slider .w::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 4px;
}

.reviews-slider .slide {
  flex: 0 0 300px;
  background: white;
  padding: 20px;
  background:#eee;
  border-radius: 12px;
  box-shadow:0 .5rem 1rem rgba(0,0,0,0.1) ;
  scroll-snap-align: center;
  transition: transform 0.3s ease;
}

.reviews-slider .slide:hover {
  transform: translateY(-5px);
}

.reviews-slider .stars {
  margin-bottom: 15px;
  color: #ffc107;
}

.reviews-slider .slide p {
  font-size: 0.95rem;
  color: #555;
  margin-bottom: 10px;
  line-height: 1.6;
}

.reviews-slider .slide h3 {
  font-size: 1.1rem;
  color: #333;
  margin: 5px 0;
}

.reviews-slider .slide span {
  display: block;
  font-size: 0.85rem;
  color: #888;
  margin-bottom: 10px;
}

.reviews-slider .slide img {
  width: 100px;
  height: 100px;
  border-radius: 30%;
  object-fit: cover;
  border: 1.2px solid  black;
  margin: auto;
}

/* Responsive Styles */

/* Medium devices (tablets <= 991px) */
@media (max-width: 991px) {
  .reviews-slider .w {
    flex-wrap: wrap;
    justify-content: center;
    overflow-x: hidden;
  }

  .reviews-slider .slide {
    flex: 1 1 45%;
    margin: 10px;
  }
}

/* Small devices (phones <= 768px) */
@media (max-width: 768px) {
  .reviews-slider .slide {
    flex: 1 1 90%;
    margin: 10px auto;
  }

  .reviews-slider .slide p {
    font-size: 0.9rem;
  }

  .reviews-slider .slide h3 {
    font-size: 1rem;
  }
}

/* Extra small devices (<= 480px) */
@media (max-width: 480px) {
  .reviews-slider {
    padding: 40px 3%;
  }

  .reviews-slider .slide {
    padding: 15px;
  }

  .reviews-slider .slide img {
    width: 50px;
    height: 50px;
  }
}






  </style>
</head>
<body>
  <section class="header">
    <a href="home.php" class="logo">Travel.</a>
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">About</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>  

<div class="heading" style="background:url('Picsart0.jpg')no-repeat center center/cover">
<h1>about</h1>
</div>





<!-- about section starts -->

<section class="about">

  <div class="image">
   <img src="couple-field-brunette-white-dress-pair-sitting-grass.jpg" alt="">

  </div>

  <div class="content">
    <h3>why choose us?</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure nunquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>

    <div class="icons-container">

      <div class="icons">
        <i class="fas fa-map"></i>
        <span>top destinations</span>
      </div>

      <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <span>affordable price</span>
      </div>

      <div class="icons">
        <i class="fas fa-headset"></i>
        <span>24/7 guide service</span>
      </div>

    </div>

  </div>

</section>

<!-- about section ends -->
<section class="reviews-slider">
    <div class="w">
        <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                debitis laborum. Tempora, ullam.</p>
            <h3>Alish Dei</h3>
            <span>traveler</span>
            <img src="person5.jpg" alt="nice">
        </div>

<div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
             <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                debitis laborum. Tempora, ullam.</p>
            <h3>john doe</h3>
            <span>traveler</span>
            <img src="person7.jpg" alt="nice">
        </div>
        <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
             <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                debitis laborum. Tempora, ullam.</p>
            <h3>john winckle</h3>
            <span>traveler</span>
            <img src="person2.jpg" alt="nice">
        </div>
        <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                debitis laborum. Tempora, ullam.</p>
            <h3>Hery cris</h3>
            <span>traveler</span>
            <img src="person1.jpg" alt="nice">
        </div>
        <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                debitis laborum. Tempora, ullam.</p>
            <h3>nancy wenie</h3>
            <span>traveler</span>
            <img src="person11.jpg" alt="nice">
        </div>
        <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                debitis laborum. Tempora, ullam.</p>
            <h3>rack rolls</h3>
            <span>traveler</span>
            <img src="person8.jpg" alt="nice">
        </div>
        <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                debitis laborum. Tempora, ullam.</p>
            <h3>humber dei</h3>
            <span>traveler</span>
            <img src="person4.jpg" alt="nice">
        </div>
        <div class="slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur animi excepturi nemo earum
                adipisci ad fugiat quia tempora expedita alias, blanditiis repellat, ullam numquam voluptates ab
                debitis laborum. Tempora, ullam.</p>
            <h3>janvi gupta</h3>
            <span>traveler</span>
            <img src="person10.jpg" alt="nice">
        </div>



    </div>
</section>










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
<script src="inter.js" ></script>
</body>
</html>