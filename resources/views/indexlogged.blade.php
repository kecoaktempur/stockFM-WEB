<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="img/Logo cropped.png" />
    <link rel="stylesheet" href="css/index-logged.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <title>Stock FM</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <header>
        <a href="index-logged.html  ">
        <img src="img/LogoWhite.png" alt="" , width="160" style="cursor: pointer" />
    </a>
    <nav class="navbar">
        <a href="{{ url('/sesi/storepage-logged')}}">Product</a>
        <a href="{{ url('/about-us-logged')}}">About Us</a>
        <a href="">Contact</a>
        <img src="storage/profile_pictures/avatar.png" alt="#" onclick="openProfile()">
    </nav>
    </header>
    <div id="profile-drawer" class="profile-drawer">
        <span class="icon-close" onclick="closeProfile()"><ion-icon name="close"></ion-icon></span>
        <div class="profile-card">
            <img src="storage/profile_pictures/avatar.png" alt="#">
            <h2>@ {{ auth()->user()->username}}</h2>
            <table>
                <tr>
                    <td>
                        <i class="fa-solid fa-user fa-xl"></i>
                    </td>
                    <td>
                        <p>{{ auth()->user()->fullname}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-envelope fa-xl"></i>
                    </td>
                    <td>
                        <p>{{ auth()->user()->email}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-phone fa-xl"></i>
                    </td>
                    <td>
                        <p>{{ auth()->user()->phone}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-location-dot fa-xl"></i>
                    </td>
                    <td>
                    <p>{{ auth()->user()->location}}</p>
                    </td>
                </tr>
            </table>
            <div class="tombol-edit">
                <button>
                    <a href="{{ url('/auth/updateprofile')}}">Edit Profile</a>
                </button>
            </div>
            <div class="tombol-keluar">
                <a href="{{ url('/logout')}}" method="GET">
                    <button> Keluar
                    </button>
                </a>
            </div>
        </div>
    </div>
    <section class="parallax">
      <img src="img/awan-1.png" id="awan-kekanan" alt="#" style="transform: scale(0.7); top: -140px" />
      <img src="img/awan-2.png" id="awan-kekiri" alt="#" style="transform: scale(0.7); top: -140px" />
      <img src="img/factory.png" id="factory" alt="#" style="transform: scale(0.7); top: -70px" />
      <img src="img/floor-trees.png" id="floor-trees" alt="#" style="top: -220px" />
      <img src="img/truck.png" id="truck" alt="#" style="transform: scale(0.8); left: -60px; top: -125px" />
      <img src="img/Logo.png" id="logoswipe" alt="#" style="transform: scale(0.3)" />
    </section>
    <div class="content">
      <img class="triangle-bg-right" src="img/SeekPng.com_triangle-png-tumblr_8630628.png" alt="#" />
      <img class="triangle-bg-mid" src="img/SeekPng.com_triangle-png-tumblr_8630628.png" alt="#" />
      <img class="triangle-bg-left" src="img/SeekPng.com_triangle-png-tumblr_8630628.png" alt="#" />
      <div class="gambar-content">
        <img src="img/landingPage.png" , width="500" alt="#" />
      </div>
      <div class="text">
        <h1>STOCK FM</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus perferendis dignissimos libero et eius fugit assumenda rerum accusantium nostrum consequuntur dolorem natus, excepturi ipsa laborum id fuga ipsam. Minus
          commodi deserunt quam quasi, tempora voluptatem dolorem consequuntur tenetur saepe repellendus aperiam accusamus nobis laboriosam? Hic quo sint nesciunt harum neque!
        </p>
        <button class="check">
          <a href="home.html" alt="#">Check Now</a>
        </button>
      </div>
    </div>
    <div class="what-we-are">
      <div class="">
        <div class="">
          <p>Necessitatibus perferendis dignissimos libero et eius fugit assumenda rerum accusantium</p>
          <span class="bar"></span>
          <h1>BEST QUALITY</h1>
        </div>
        <div class="">
          <h1>GUARANTEED</h1>
          <span class="bar"></span>
          <p>Necessitatibus perferendis dignissimos libero et eius fugit assumenda rerum accusantium</p>
        </div>
      </div>
    </div>
    <div class="photo-grid">
      <img alt="" src="img/photo-grid.png" />
    </div>
    <div class="services">
      <div class="heading">
        <h2>WHAT WE ACTUALLY DO?</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus perferendis dignissimos libero et eius fugit assumenda rerum accusantium nostrum consequuntur dolorem natus, excepturi ipsa laborum id fuga ipsam. Minus
          commodi deserunt quam quasi.
        </p>
      </div>
      <div class="cards">
        <div class="card">
          <div class="light"></div>
          <img alt="" />
          <h3>Giving best review</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="card">
          <div class="light"></div>
          <img alt="" />
          <h3>Provide Grade Quality</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
        <div class="card">
          <div class="light"></div>
          <img alt="" />
          <h3>Reasonable Price</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
      </div>
    </div>
    <section class="feature">
      <h2>WHAT WE PROVIDE FOR YOU</h2>
      <div class="feature-page">
        <div class="feature-box">
          <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_cz2x0yb7.json" background="transparent" speed="1" style="width: 200px; height: 200px" loop autoplay></lottie-player>
          <h5>Trusted Review</h5>
        </div>
        <div class="feature-box">
          <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_vas19ssm.json" background="transparent" speed="1" style="width: 200px; height: 200px" loop autoplay></lottie-player>
          <h5>Guaranteed Price</h5>
        </div>
        <div class="feature-box">
          <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_TXBESKCamC.json" background="transparent" speed="1" style="width: 200px; height: 200px" loop autoplay></lottie-player>
          <h5>Worldwide Shipment</h5>
        </div>
        <div class="feature-box">
          <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_npdm92px.json" background="transparent" speed="1" style="width: 200px; height: 200px" loop autoplay></lottie-player>
          <h5>24/7 Support</h5>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <img alt="#" src="img/LogoWhite.png" />
          </div>
          <div class="footer-col">
            <h4>Company</h4>
            <ul>
              <li><a href="#">Who we are</a></li>
              <li><a href="#">What we actually do</a></li>
              <li><a href="#">What we provide</a></li>
              <li><a href="#">Benefit</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Quick-Links</h4>
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="home-logged.html">Product</a></li>
              <li><a href="index-logged.html">About Us</a></li>
              <li><a class="login/reg">Login/Register</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Check on us</h4>
            <div class="social-links">
              <a href=""><ion-icon name="logo-whatsapp"></ion-icon></a>
              <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
              <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
              <a href=""><ion-icon name="logo-github"></ion-icon></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/script-logged.js"></script>
  </body>
</html>
