<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="img/Logo cropped.png">
    <link rel="stylesheet" href="css/update.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <title>Product Card</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="itemBackground">
                <div class="gradients">
                    <div class="gradient second" color="blue"></div>
                </div>
                <h1 class="nike">STOCK</h1>
                <img src="img/logo.png" alt="" class="logo">
            </div>
            <form action="/updateprofile" method="POST" class="info">
                @csrf
                <div class="itemName">
                    <div>
                        <h1 class="big">UPDATE</h1>
                        <span class="new">Profile</span>
                    </div>
                    <h3 class="small">{{ auth()->user()->fullname}}</h3>
                </div>
                <div class="description">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input name="username" value="{{ auth()->user()->username}}" type="text" required />
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input name="fullname" value="{{ auth()->user()->fullname }}" type="text" required />
                        <label>Fullname</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input name="phone" value="{{ auth()->user()->phone }}" type="text" required />
                        <label>Phone</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input name="location" value="{{ auth()->user()->location }}" type="text" required />
                        <label>Location</label>
                    </div>
                </div>
                <div class="buy-price">
                    <a href="#" class="buy">Save Changes</a>
                </div>
            </form>
        </div>
    </div>
    <script src="script/product.js"></script>
</body>
</html>
