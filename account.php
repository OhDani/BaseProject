<?php
// Kết nối tới cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "farmtale_account");

// Kiểm tra kết nối
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Đăng nhập thành công, redirect đến trang chính
        header("Location: home.php");
        exit();
    } else {
        // Sai tên đăng nhập hoặc mật khẩu
        echo "Invalid username or password";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm tale</title>
    <!-- REMIX ICON -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Gaegu:wght@400;700&family=Lobster&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>
<body>
    <div class="main">
        <header class="header_rest">
            <div class="center">
                <a href="#">
                    <img class="logo" src="./assets/img/farm tale.png" alt="Farm Tale">
                </a>
                <nav class="navbar_topic" id="navbar_topic">
                    <ul class="menu">
                        <li><a href="./home.html" class="topic">Home</a></li>
                        <li>
                            <a href="./about_hanging.html" class="topic">About</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#" class="link">Indoor plants</a>
                                    <ul>
                                        <li><a href="./about_hanging.html" class="link">Hanging Plants</a></li>
                                        <li><a href="./succulents.html" class="link">Succulents</a></li>
                                        <li><a href="./roomSpecific.html" class="link">Room Specific</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Outdoor plants</a>
                                    <ul>
                                        <li><a href="./bushes.html" class="link">Bushes</a></li>
                                        <li><a href="./bonsai.html" class="link">Bonsai</a></li>
                                        <li><a href="./ediblePlants.html" class="link">Edible plants</a></li>
                                    </ul>
                                </li>
                                <li><a href="./others.html" class="link">Others</a></li>
                            </ul>
                        </li>
                        <li><a href="./shop.html" class="topic">Shop</a></li>
                        <li>
                            <a class="btn_account active" href="./account.html" class="topic">
                                <i class="ri-user-line"></i>
                                <p class="account">Account</p>
                            </a>
                        </li>
                    </ul>
                    <a id="cart" href="./shop_cart.html"><i class="ri-shopping-cart-line bag"></i></a>
                    <div class="nav_close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </nav>
            </div>
            <div class="nav_toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </header>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="./assets/img/fb.png">
                    <img src="./assets/img/gg.png">
                </div>
                <form id="login" class="input-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method=post>
                    <div class="account">
                        <input type="text" class="input-field" id="username" name="username" required>
                        <label class="input_label">User</label>
                    </div>
                    <div class="account">
                        <input type="text" class="input-field" id="password" name="password" required>
                        <label class="input_label">Password</label>
                    </div>
                    <input type="checkbox" class="check-box"><span class="span">Remember pass</span>
                    <button type="submit" class="submit-btn" id="login" name="login" value="login">Log in</button>
                </form>
                <form id="register" class="input-group" action="dangki" method=post>
                    <div class="account">
                        <input type="text" class="input-field" id="username" name="username" required>
                        <label class="input_label">User</label>
                    </div>
                    <!-- <div class="account">
                        <input type="email" class="input-field" placeholder=" " required>
                        <label class="input_label">Email</label>
                    </div> -->
                    <div class="account">
                        <input type="text" class="input-field" id="password" name="password" required>
                        <label class="input_label">Password</label>
                    </div>
                    <input type="checkbox" class="check-box"><span class="span">I agree to the terms & conditions</span>
                    <button type="submit" class="submit-btn" id="signup" name="signup">Register</button>
                </form>
            </div>
        </div>
        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container footer_account footer_shop padding_footer grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> Farm Tale
                    </a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button btn button--flex footer__button click_icon">
                                Subscribe
                                <i class="ri-arrow-right-up-line button__icon"></i>
                            </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">1234 - Peru</li>
                        <li class="footer__information">La Libertad - 43210</li>
                        <li class="footer__information">123-456-789</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+999 888 777</li>

                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all credit cards
                    </h3>

                    <div class="footer__cards">
                        <img src="./assets/img/card1.png" alt="" class="footer__card">
                        <img src="./assets/img/card2.png" alt="" class="footer__card">
                        <img src="./assets/img/card3.png" alt="" class="footer__card">
                        <img src="./assets/img/card4.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>
            <p class="footer__copy">&#169; TranNgoc. All rigths reserved</p>
        </footer>
    </div>
    <script src="./assets/main.js"></script>
</body>

</html>