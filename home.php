<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="stylecss/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="stylecss/style.css">
    <link rel="stylesheet" href="stylecss/style2.css">
    <title>Journey Junction</title>
</head>

<body onload="myFunction()">
    <div id="loading"></div>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">JOURNEY JUNCTION</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#discover" class="nav__link">Discover</a>
                    </li>
                    <li class="nav__item">
                        <a href="#place" class="nav__link">Places</a>
                    </li>
                </ul>
                <div class="nav__dark">
                    <!-- Theme change button -->
                    <span class="change-theme-name">Dark mode</span>
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                </div>

                <i class="ri-close-line nav__close" id="nav-close"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <img src="stylecss/img/india4.png" alt="" class="home__img">

            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__data-subtitle">Discover your place</span>
                    <h1 class="home__data-title">Explore The <br> Best <b>Beauty <br>Of India</b></h1>
                    <a href="#" class="button">Explore</a>

                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>

                <div class="home__info">
                    <div>
                        <span class="home__info-title">5 best places to visit</span>
                        <a href="#place" class="button button--flex button--link home__info-button">
                            More <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="home__info-overlay">
                        <img src="assets/img/home2.jpg" alt="" class="home__info-img">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">More Information <br> About The Best Beaches</h2>
                    <p class="about__description">You can find the most beautiful and pleasant places at the best
                        prices with special discounts, you choose the place we will guide you all the way to wait, get your
                        place now.
                    </p>
                    <a href="#" class="button">Reserve a place</a>
                </div>

                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="stylecss/img/redfort.jpg" alt="" class="about__img-one">
                    </div>

                    <div class="about__img-overlay">
                        <img src="stylecss/img/taj.jpg" alt="" class="about__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== DISCOVER ====================-->
        <section class="discover section" id="discover">
            <h2 class="section__title">Discover the most <br> attractive places</h2>

            <div class="discover__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== DISCOVER 1 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="stylecss/img/bbb.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Bali</h2>
                            <span class="discover__description">24 tours available</span>
                        </div>
                    </div>

                    <!--==================== DISCOVER 2 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="stylecss/img/001.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Hawaii</h2>
                            <span class="discover__description">15 tours available</span>
                        </div>
                    </div>

                    <!--==================== DISCOVER 3 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="stylecss/img/002.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Hvar</h2>
                            <span class="discover__description">18 tours available</span>
                        </div>
                    </div>

                    <!--==================== DISCOVER 4 ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="stylecss/img/002.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Whitehaven</h2>
                            <span class="discover__description">32 tours available</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== EXPERIENCE ====================-->
        <section class="experience section">
            <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

            <div class="experience__container container grid">
                <div class="experience__content grid">
                    <div class="experience__data">
                        <h2 class="experience__number">20</h2>
                        <span class="experience__description">Year <br> Experience</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">75</h2>
                        <span class="experience__description">Complete <br> tours</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">650+</h2>
                        <span class="experience__description">Tourist <br> Destination</span>
                    </div>
                </div>

                <div class="experience__img grid">
                    <div class="experience__overlay">
                        <img src="stylecss/img/rashtrapati2.jpg" alt="" class="experience__img-one">
                    </div>

                    <div class="experience__overlay">
                        <img src="stylecss/img/rashtrapati3.jpg" alt="" class="experience__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PLACES ====================-->
        <section class="place section" id="place">
            <h2 class="section__title">Choose Your Place</h2>

            <div class="place__container container grid">
                <!--==================== PLACES CARD 1 ====================-->
                <div class="place__card">
                    <img src="stylecss/img/jamu.jpg" alt="" class="place__img">
                    <a href="jammu.php">
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>
                            <div class="place__data">
                                <h3 class="place__title">JAMMU&KASHMIR</h3>
                                <span class="place__subtitle">INDIA</span>
                                <span class="place__price">$2499</span>
                            </div>
                        </div>
                    </a>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 2 ====================-->
                <div class="place__card">
                    <img src="stylecss/img/himachal.webp" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">5,0</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">HIMACHAL PRADESH</h3>
                            <span class="place__subtitle">INDIA</span>
                            <span class="place__price">$1599</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 3 ====================-->
                <div class="place__card">
                    <img src="stylecss/img/Rajasthan.jpg" alt="" class="place__img">

                    <a href="rajasthan.php">
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,9</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">RAJASTHAN</h3>
                                <span class="place__subtitle">INDIA
                                </span>
                                <span class="place__price">$3499</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                </div></a>

                <!--==================== PLACES CARD 4 ====================-->
                <div class="place__card">
                    <img src="stylecss/img/maharashtra.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">MHARASHTRA</h3>
                            <span class="place__subtitle">INDIA</span>
                            <span class="place__price">$2499</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 5 ====================-->
                <div class="place__card">
                    <img src="stylecss/img/tamilnadu.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">TAMIL NADU</h3>
                            <span class="place__subtitle">Croacia</span>
                            <span class="place__price">$1999</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">JOURNEY JUNCTION</h3>
                        <p class="footer__description">Travel you choose the <br> destination,
                            we offer you the <br> experience.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2023 MSSR. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="stylecss/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="stylecss/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="stylecss/js/main.js"></script>
        <script>
            var preloader = document.getElementById('loading');

            function myFunction() {
                preloader.style.display = "none"
            }
        </script>
</body>

</html>