<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/Logo cropped.png">
    <title>
        About us
    </title>
    <link rel="stylesheet" href="css/about.css">
</head>

<body>
    <header>
        <a href="{{ url('/homepage') }}">
            <img src="img/LogoWhite.png" alt="", width="160"style="cursor: pointer;">
        </a>
        <nav class="navbar">
            <a href="{{ url('/storepage') }}">Product</a>
            <a href="{{ url('/homepage') }}">Homepage</a>
            <a href="#">Contact</a>
            @if (Auth::check())
                <img src="storage/profile_pictures/avatar.png" alt="#" onclick="openProfile()">
            @else
                <button class="btnLogin-popup">Login</button>
            @endif
        </nav>
    </header>
    @if (Auth::check())

        <div id="profile-drawer" class="profile-drawer">
            <span class="icon-close" onclick="closeProfile()">
                <ion-icon name="close"></ion-icon>
            </span>
            <div class="profile-card">
                <img src="storage/profile_pictures/avatar.png" alt="#">
                <h2>@ {{ auth()->user()->username }}</h2>
                <table>
                    <tr>
                        <td>
                            <i class="fa-solid fa-user fa-xl"></i>
                        </td>
                        <td>
                            <p>{{ auth()->user()->fullname }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-envelope fa-xl"></i>
                        </td>
                        <td>
                            <p>{{ auth()->user()->email }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-phone fa-xl"></i>
                        </td>
                        <td>
                            <p>{{ auth()->user()->phone }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-location-dot fa-xl"></i>
                        </td>
                        <td>
                            <p>{{ auth()->user()->location }}</p>
                        </td>
                    </tr>
                </table>
                <div class="tombol-edit">
                    <button>
                        <a href="/update">Edit Profile</a>
                    </button>
                </div>
                <div class="tombol-keluar">
                    <a href="/logout">
                        <button> Keluar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="wrapper" id="loginModal">
            <span class="icon-close">
                <ion-icon name="close"></ion-icon>
            </span>
            <div class="form-box login">
                <h2>
                    <span>Login</span>
                </h2>
                <form action="/login" method="POST">
                    @csrf
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" name="email" required>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" name="password" required minlength="8">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox">{{ __('Remember Me?') }}</label>
                        @if (Route::has('password.request'))
                            <a href="#">{{ __('Forgot Password?') }}</a>
                        @endif
                    </div>
                    <button name="submit" type="submit" class="login-btn">Login</button>
                    <div class="login-register">
                        <p>
                            Don't have an account?
                            <a class="register-link" href="#">Register</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <h2>
                    <span>Registration</span>
                </h2>
                <form action="/create" method="POST">
                    @csrf
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="person"></ion-icon>
                        </span>
                        <input name="username" type="text" required />
                        <label>Username</label>
                        @error('username')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input name="email" type="email" required />
                        <label>Email</label>
                        @error('email')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input name="password" type="password" required minlength="8" />
                        <label>Password</label>
                        @error('password')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input name="password" type="password" required minlength="8" />
                        <label>Confirm Password</label>
                        @error('confirmpw')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" />Agree to Terms & Conditions</label>
                    </div>
                    <button type="submit" class="login-btn">Register</button>
                    <div class="login-register">
                        <p>
                            Already have an account?
                            <a class="login-link" href="#">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    @endif
    <section class="about">
        <h1 align="center">
            About Us
        </h1>
        <div class="main">
            <img class="triangle-bg-right" id="triangle-bg-right"
                src="img/SeekPng.com_triangle-png-tumblr_8630628.png" alt="#">
            <img class="triangle-bg-mid" id="triangle-bg-mid" src="img/SeekPng.com_triangle-png-tumblr_8630628.png"
                alt="#">
            <img class="triangle-bg-left" id="triangle-bg-left" src="img/SeekPng.com_triangle-png-tumblr_8630628.png"
                alt="#">
            <div class="card">
                <img src="img/1.jpg" alt="#" style="margin-right: -400px;">
            </div>
            <div class="about-text">
                <h4>Reyhan Eldwin Maulana</h4>
                <h5>082111633069</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span>when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</span>
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                    It was <span>popularised in the 1960s with the release of Letraset sheets</span> containing Lorem
                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </p>
                <a>
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-github"></ion-icon>
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </div>
        </div>
        <div class="main">
            <div class="about-text">
                <h4>Ferry Triwantono</h4>
                <h5>082111633094</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    <span>Lorem Ipsum has been the industry's standard</span> dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, <span>but also the leap into electronic typesetting,
                        remaining essentially unchanged. </span>
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.
                </p>
                <a>
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-github"></ion-icon>
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </div>
            <div class="card">
                <img src="img/IMG_0409.jpg" alt="#" style="margin-left: -400px;">
            </div>
        </div>
    </section>
    @if (Auth::check())

        <div id="profile-drawer" class="profile-drawer">
            <span class="icon-close" onclick="closeProfile()">
                <ion-icon name="close"></ion-icon>
            </span>
            <div class="profile-card">
                <img src="storage/profile_pictures/avatar.png" alt="#">
                <h2>@ {{ auth()->user()->username }}</h2>
                <table>
                    <tr>
                        <td>
                            <i class="fa-solid fa-user fa-xl"></i>
                        </td>
                        <td>
                            <p>{{ auth()->user()->fullname }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-envelope fa-xl"></i>
                        </td>
                        <td>
                            <p>{{ auth()->user()->email }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-phone fa-xl"></i>
                        </td>
                        <td>
                            <p>{{ auth()->user()->phone }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-location-dot fa-xl"></i>
                        </td>
                        <td>
                            <p>{{ auth()->user()->location }}</p>
                        </td>
                    </tr>
                </table>
                <div class="tombol-edit">
                    <button>
                        <a href="/update">Edit Profile</a>
                    </button>
                </div>
                <div class="tombol-keluar">
                    <a href="/logout">
                        <button> Keluar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="wrapper" id="loginModal">
            <span class="icon-close">
                <ion-icon name="close"></ion-icon>
            </span>
            <div class="form-box login">
                <h2>
                    <span>Login</span>
                </h2>
                <form action="/login" method="POST">
                    @csrf
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" name="email" required>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" name="password" required minlength="8">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox">{{ __('Remember Me?') }}</label>
                        @if (Route::has('password.request'))
                            <a href="#">{{ __('Forgot Password?') }}</a>
                        @endif
                    </div>
                    <button name="submit" type="submit" class="login-btn">Login</button>
                    <div class="login-register">
                        <p>
                            Don't have an account?
                            <a class="register-link" href="#">Register</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <h2>
                    <span>Registration</span>
                </h2>
                <form action="/create" method="POST">
                    @csrf
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="person"></ion-icon>
                        </span>
                        <input name="username" type="text" required />
                        <label>Username</label>
                        @error('username')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input name="email" type="email" required />
                        <label>Email</label>
                        @error('email')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input name="password" type="password" required minlength="8" />
                        <label>Password</label>
                        @error('password')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input name="password" type="password" required minlength="8" />
                        <label>Confirm Password</label>
                        @error('confirmpw')
                            <div class="error_msg">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" />Agree to Terms & Conditions</label>
                    </div>
                    <button type="submit" class="login-btn">Register</button>
                    <div class="login-register">
                        <p>
                            Already have an account?
                            <a class="login-link" href="#">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    @endif
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
                        <li><a href="#">Product</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Login/Register</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Check on us</h4>
                    <div class="social-links">
                        <a href="">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a>
                        <a href="">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                        <a href="">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
</body>

</html>
