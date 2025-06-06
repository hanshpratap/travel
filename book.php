<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>travels</title>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="stylish.css">
  <style>
   .booking {
  background:white;
  padding: 50px 20px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.booking .heading-title {
  text-align: center;
  font-size: 5.5rem;
  color: #333;
  margin-bottom: 40px;
}

.booking .book-form {
  max-width: 70%;
  margin: 0 auto;
  background:  #bebbbb;
  padding: 30px 40px;
  border-radius: 8px;
  box-shadow: gray;
}

.booking .flex {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

/* Each inputBox takes 48% width on larger screens */
.booking .inputBox {
  flex: 1 1 48%;
  display: flex;
  flex-direction: column;
}

.booking .inputBox input:focus::placeholder{
    color:#fff9;
}

/* Full width if screen is narrow */
@media (max-width: 768px) {
  .booking .inputBox {
    flex: 1 1 100%;
  }

  .booking .heading-title {
    font-size: 26px;
  }

  .booking .book-form {
    padding: 20px;
  }

  .booking .btn {
    width: 100%;
  }
}

.booking .inputBox .label {
  font-size: 2rem;
  margin-bottom: 6px;
  color: #222;
}

.booking .inputBox input {
  padding: 10px 14px;
  font-size: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  transition: 0.3s ease;
    width: 100%;
  color:#fff9;
  border:0.1rem solid var(--black);
}

.booking .inputBox input:focus {
  box-shadow:  0 .5rem 1rem rgba(0,0,0,0.1);
  outline: none;
   background:#222;
  color:#fff;
}

.booking .btn {
  margin-top: 30px;
  padding: 12px 20px;
  background-color: #222;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.booking .btn:hover {
  background-color:#Be44ad;
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

<div class="heading" style="background:url('Picsart2.jpg')no-repeat center center/cover">
<h1>books!</h1>
</div>

<!-- booking section starts -->

<section class="booking">

  <h1 class="heading-title">Book your trip!</h1>

  <form action="book.php" method="post" class="book-form">

    <div class="flex">
      <div class="inputBox">
        <span class="label">name :</span>
        <input type="text" placeholder="enter your name" name="name">
      </div>
       <div class="inputBox">
        <span class="label">email :</span>
        <input type="email" placeholder="enter your email" name="email">
      </div>
     <div class="inputBox">
        <span class="label">phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
      </div>
       <div class="inputBox">
        <span class="label">address :</span>
        <input type="text" placeholder="enter your address" name="address">
      </div>
 <div class="inputBox">
        <span class="label">where to :</span>
        <input type="text" placeholder="place you want to visite" name="location">
      </div>
 <div class="inputBox">
        <span class="label">how many :</span>
        <input type="number" placeholder="number of guests" name="guests">
      </div>
 <div class="inputBox">
        <span class="label">arrivals :</span>
        <input type="date" name="arrivals">
      </div>
       <div class="inputBox">
        <span class="label">leaving :</span>
        <input type="date" name="leaving">
      </div>
      </div>
      <input type="submit" value="submit" class="btn" name="send">
</form>

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