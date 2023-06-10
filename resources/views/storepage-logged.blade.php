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
    <link rel="stylesheet" href="css/home-logged.css">
    <script>
        function logOut() {
            window.location.href="home.html";
        }
    </script>
</head>
<body>
    <header>
        <a href="index-logged.html">
            <img src="img/LogoWhite.png" alt="" , width="160" style="cursor: pointer;">
        </a>
        <div class="search">
            <input type="text" class="searchterm" placeholder="Search items...">
        </div>
        <nav class="navbar">
            <div class="right-bar">
                <i class="fa-solid fa-bell"></i>
                <i class="fa-regular fa-heart"></i>
                <i class="fa-solid fa-circle-question"></i>
                <img src="img/1.jpg" alt="#" onclick="openProfile()">
            </div>
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
    <div id="profile-drawer" class="profile-drawer">
        <span class="icon-close" onclick="closeProfile(), closeProfile()"><ion-icon name="close"></ion-icon></span>
        <div class="profile-card">
            <img src="img/1.jpg" alt="#">
            <h2>@Tetrey</h2>
            <table>
                <tr>
                    <td>
                        <i class="fa-solid fa-user fa-xl"></i>
                    </td>
                    <td>
                        <p>Ferry Triwantono</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-envelope fa-xl"></i>
                    </td>
                    <td>
                        <p>Triwantono@gmail.com</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-phone fa-xl"></i>
                    </td>
                    <td>
                        <p>+62626262</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-location-dot fa-xl"></i>
                    </td>
                    <td>
                    <p>Gresik Raya</p>
                    </td>
                </tr>
            </table>
            <div class="tombol-edit">
                <button>
                    <a href="">Edit Profile</a>
                </button>
            </div>
            <div class="tombol-keluar">
                <button onclick="logOut()">
                    <a href="home.html">Keluar</a>
                </button>
            </div>
        </div>
    </div>
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
                <img src="img/cooled-lava-rock1-md.png" alt="">
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
                <a href="product2.html">
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-Slate_Ground_1/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Slate Rock
                </h3>
                <a href="product2.html">
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
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-sand-ocean-sand-1/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Ocean Sand
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
                <img src="img/dirt-material1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Dirt Material
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
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-Metal_Padded_Panels_1/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Metal Padded Panels
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
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-Stone_Wall_5/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Stone Wall
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
                <img src="https://cdn.staticcrate.com/stock-hd/materials/materials-Rooftop_Slate_5/1-md.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Rooftop Slate
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
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
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
                <a href="product9.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product9.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product10.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product10.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product11.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product11.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product12.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product12.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product13.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product13.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product14.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product14.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product15.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product15.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product16.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product16.html">
                    <button class="check-item-button">
                    Check Item
                </button>
            </a>
                <button class="wishlist" onclick="">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
            <div class="item-card">
                <a href="product17.html">
                <img src="img/Bata_putih.png" alt="">
            </a>
                <h3 style="color: #fff; letter-spacing: 3;">
                    Batu Putih
                </h3>
                <a href="product17.html">
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
    <script src="js/script-logged.js"></script>
</body>

</html>
