<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        STOCK FM
    </title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="img/Logo cropped.png">
    <link rel="stylesheet" href="css/home.css">
    <script>
        function redirect() {
            window.location.href="home-logged.html";
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
    <div class="form-box login">
        <h2>
            <span>Login</span>
        </h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required minlength="8">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label input type="checkbox">Remember Me?</label>
                    <a href="#">Forgot Password?</a>
                </div>
                    <button type="submit" class="login-btn" onclick="redirect()">Login</button>
                <div class="login-register">
                    <p> Don't have an account?
                        <a class="register-link" href="#">Register</a>
                    </p>
                </div>
            </form>
    </div>
    <div class="form-box register">
        <h2>
            <span>Registration</span>
        </h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required minlength="8">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Agree to Terms & Conditions</label>
                </div>
                <button type="submit" class="login-btn">Register</button>
                <div class="login-register">
                    <p> Already have an account?
                        <a class="login-link" href="#">Login</a>
                    </p>
                </div>
            </form>
    </div>
</div>
    <header>
        <a href="index.html">
            <img src="img/LogoWhite.png" alt="" , width="160" style="cursor: pointer;">
        </a>
        <div class="search">
            <input type="text" class="searchterm" placeholder="Search items...">
        </div>
        <nav class="navbar">
            <i class="fa-solid fa-bell"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-circle-question"></i>
            @if (Auth::check())
            <img src="storage/profile_pictures/avatar.png" alt="#" onclick="openProfile()">
            @else
            <button class="btnLogin-popup">Login</button>
            @endif
            <div class="sidebar">
                <button class="add_product">
                        <ion-icon name="add-outline"></ion-icon>
                    <div class="text-place">
                        <h2>Add Product</h2>
                        <p>Add a Product here</p>
                    </div>
                </button>
                <div class="text_container">
                    <ul>
                        <li>
                            <ion-icon name="grid-outline"></ion-icon>
                            Discover
                        </li>
                        <li>
                            <ion-icon name="trending-up-outline"></ion-icon>
                            Trending
                        </li>
                        <li>
                            <ion-icon name="list-outline"></ion-icon>
                            Category
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hashtag_container">
                All tag
                <ul>
                    <li>
                        <button>
                            <ion-icon name="chevron-back-outline"></ion-icon>
                    </li>
                    </button>
                    <li>#sand</li>
                    <li>#wood</li>
                    <li>#metal</li>
                    <li>#chemical</li>
                    <li>#ceramic</li>
                    <li>#plate</li>
                    <li>#gold</li>
                    <li>#liquid</li>
                    <li>#stone</li>
                    <li>#silver</li>
                    <li>#pipe</li>
                    <li>
                        <button>
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="item">
        <h2>
            Discover
        </h2>
        <div class="item-page">
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product1.html">
                <img src="https://cdn.staticcrate.com/stock-hd/materials/RenderCrate-Alien_Obsidian/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Cooled Lava Rock
                </h3>
                <a href="product1.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product3.html">
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-Slate_Ground_1/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Slate Rock
                </h3>
                <a href="product3.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product4.html">
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-sand-ocean-sand-1/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Ocean Sand
                </h3>
                <a href="product4.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product5.html">
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-dirt-dirt-material-1/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Dirt Material
                </h3>
                <a href="product5.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product6.html">
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-Metal_Padded_Panels_1/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Metal Padded Panels
                </h3>
                <a href="product6.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product7.html">
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-Stone_Wall_5/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Stone Wall
                </h3>
                <a href="product7.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product8.html">
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-Rooftop_Slate_5/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Rooftop Slate
                </h3>
                <a href="product8.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
        </div>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>
