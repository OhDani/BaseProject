<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Tale</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Gaegu:wght@400;700&family=Lobster&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <!-- <link rel="stylesheet" href="./assets/css/shop_main.css"> -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- ========FAVICON======== -->
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="body" onscroll="handleScroll(event)">
    <!-- <div class="main"> -->
    <!-- HOME -->
    <header class="header">
        <div class="center">
            <a href="#">
                <img class="logo" src="./assets/img/farm tale.png" alt="Farm Tale">
            </a>
            <nav class="navbar" id="navbar">
                <ul class="menu">
                    <li><a href="#home" class=" topic active">Home</a></li>
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
                        <a class="btn_account" href="./account.html" class="topic">
                            <i class="ri-user-line"></i>
                            <p class="account">Account</p>
                        </a>
                    </li>
                </ul>
                <a id="cart" href="./shop_cart.html"><i class="ri-shopping-cart-line bag_home"></i></a>
                <div class="nav_close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </nav>
        </div>
        <div class="nav_toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </header>
    <main>
        <div class="home">
            <div class="image">
                <img class="background-home" src="./assets/img/background home.png" alt="background home">
            </div>
            <div class="cloud">
                <img src="./assets/img/cloud.jpg" loading="lazy" alt="">
            </div>
            <div class="info">
                <div class="title">WELCOME TO FARM TALE !</div>
                <div class="sub-title">Let's explore this place together.</div>
                <a href="./about_hanging.html" class="btn start">Start Now</a>
            </div>
            <div class="desc">
                <h2 class="h2_info">INFORMATION</h2>
                <p>This website serves as a platform for me to share my thoughts, experiences, and ideas with the farm.
                </p>
                <img id="fly" src="./assets/img/bug.png" alt="bug">
                <p class="sub">
                    Farm Tale is a platform dedicated to providing comprehensive information, resources, and guidance on everything related to plants, gardening, and horticulture. It serves as a hub for plant enthusiasts, gardening enthusiasts, professionals, and anyone
                    interested in the world of plants.
                </p>
                <p>The website offers a wealth of content covering various aspects of plants, including plant care tips, gardening techniques, plant identification, gardening ideas, indoor and outdoor gardening, plant diseases and pest control, sell plants
                    and much more. It aims to educate and inspire individuals to connect with nature, explore the beauty of plants, and cultivate their own green spaces.</p>
                <p> As for me, I am an avid nature lover. I will be sharing my adventures and experiences in these areas as well. I believe that every individual has a unique story to tell and I am excited to share mine with you. My purpose is to assist and
                    provide valuable insights to users, helping them find answers to their questions and explore new ideas.</p>
                <p> Through this website and my capabilities, users can access a vast array of plant-related information, ranging from plant profiles and care guides to gardening techniques and gardening inspiration. Whether you are a beginner looking to
                    start your first garden or a seasoned gardener seeking advanced tips, the plant website aims to cater to your needs. Furthermore, my website encourages community engagement, allows users to connect with fellow plant enthusiasts, share
                    their gardening experiences, ask questions, seek advice. It fosters a supportive environment where individuals can learn from each other, exchange ideas, and celebrate their shared love for plants.
                </p>
                <p>In conclusion, Farm Tale serves as an invaluable resource for plant enthusiasts and gardening aficionados. It aims to provide a comprehensive platform where individuals can explore the world of plants, enhance their gardening skills, and
                    find inspiration for creating beautiful and prospering green spaces. Thank you for visiting my website and I hope you enjoy reading my content. If you have any question for us, just send us your comment.</p>
            </div>
        </div>
    </main>
    <!-- FOOTER -->
    <footer class="footer section">
        <div class="footer__container footer_home padding_footer grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="ri-leaf-line footer__logo-icon"></i> Plantex
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
                    <img src="assets/img/card1.png" alt="" class="footer__card">
                    <img src="assets/img/card2.png" alt="" class="footer__card">
                    <img src="assets/img/card3.png" alt="" class="footer__card">
                    <img src="assets/img/card4.png" alt="" class="footer__card">
                </div>
            </div>
        </div>

        <p class="footer__copy">&#169; TranNgoc. All rigths reserved</p>
    </footer>
    <!-- </div> -->
    <!-- =======SCROLL UP======== -->
    <!-- =======SCROLL REVEAL======== -->
    <!-- ========MAIN JS========= -->
    <script src="./assets/main.js"></script>
</body>

</html>