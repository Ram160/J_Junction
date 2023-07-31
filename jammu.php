<?php
include('admin/config/connection.php');
$sql = "SELECT * FROM contact WHERE Sno = 1";
$check = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($check);
?>

<html>

<head>
    <link href="css/stylej.css" rel="stylesheet">




</head>

<body>
    <nav class="navigation">
        <a href="#" class="logo">
            Travel
        </a>|

        <ul class="menu">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#destination">Destination</a></li>
            <li><a href="#adventure">Adventures</a> </li>
            <li><a href="#hotel">Hotel</a></li>
            <li><a href="#contact">Contenct</a></li>
        </ul>
    </nav>

    <div id="home" class="city" style="background-image:url('images/001.jpg')">
        <h1 class="cityname">Jammu And kashmir</h1>

    </div>
    <div class="text" id="destination">
        <h2>Destination </h2>
    </div>
    <div class="slider">
        <span class="slider-image" id="img1" style="background-image:url('images/002.jpg')">&nbsp; </span>
        <span class="slider-image" id="img2" style="background-image:url('images/g0.jpg')">&nbsp;</span>
        <span class="slider-image" id="img3" style="background-image:url('images/v0.jpg')">&nbsp;</span>
        <span class="slider-image" id="img4" style="background-image:url('images/so.jpg')">&nbsp;</span>
    </div>
    <main class="main" id="adventure">
        <h1>Adventures</h1>

        <section class="card-area">

            <!-- Card: City -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--city">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                                        <g>
                                            <path d="M49.7,22c-1.1,0-2,0.9-2,2v32.2c0,1.1,0.9,2,2,2s2-0.9,2-2V24C51.7,22.9,50.8,22,49.7,22z" />
                                            <path d="M13,29.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7
                                       V7.1h24.8v15.3c0,1.1,0.9,2,2,2s2-0.9,2-2V5.1c0-1.1-0.9-2-2-2H3.7c-1.1,0-2,0.9-2,2v51c0,1.1,0.9,2,2,2s2-0.9,2-2V36.5H13
                                       c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3H13z" />
                                            <path d="M58,11.9c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0
                                       c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1-0.1-0.2-0.1
                                       c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0,0,0,0,0
                                       c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0-0.1,0.1l-12.6,7.8
                                       c0,0,0,0,0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2
                                       c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0v5.4H22.1
                                       c-1.1,0-2,0.9-2,2v28.9c0,1.1,0.9,2,2,2s2-0.9,2-2V29.3h17.3v26.9c0,1.1,0.9,2,2,2s2-0.9,2-2V21l8.6-5.3v40.5c0,1.1,0.9,2,2,2
                                       s2-0.9,2-2V12.1C58,12,58,12,58,11.9z" />
                                            <path d="M28,31L28,31c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,31,28,31z" />
                                            <path d="M33.5,31L33.5,31c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,31,33.5,31z" />
                                            <path d="M28,36L28,36c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,36,28,36z" />
                                            <path d="M33.5,36L33.5,36c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,36,33.5,36z" />
                                        </g>
                                    </svg>

                                    <h2 class="card-front__heading">

                                    </h2>
                                    <p class="card-front__text-price">
                                        Adventures
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--city">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="images\pexels-haziq-farooqi-15777203 (1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--city">
                                Shikara
                            </h3>
                            <p class="inside-page__text">
                                As cities never sleep, there are always something going on, no matter what time!
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--city">View deals</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Ski -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--ski">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                                        <g>
                                            <path d="M58.8,54.5L38.5,19.3c-0.4-0.6-1-1-1.7-1s-1.4,0.4-1.7,1L14.8,54.5c-0.4,0.6-0.4,1.4,0,2c0.4,0.6,1,1,1.7,1h40.6
                                       c0.7,0,1.4-0.4,1.7-1C59.2,55.9,59.2,55.1,58.8,54.5z M36.8,24.3l5.8,10c-0.5-0.2-1.1-0.3-1.7-0.3c-2.5,0-3.7,1.5-4.6,2.5
                                       c-0.7,0.9-1,1.1-1.5,1.1s-0.8-0.2-1.5-1.1c-0.6-0.7-1.3-1.5-2.4-2.1L36.8,24.3z M20,53.5l8.9-15.4c0.5,0,0.7,0.3,1.4,1.1
                                       c0.8,1,2.1,2.5,4.6,2.5s3.7-1.5,4.6-2.5c0.7-0.9,1-1.1,1.5-1.1c0.5,0,0.8,0.2,1.5,1.1c0.8,1,2.1,2.5,4.5,2.5l6.8,11.8H20z" />
                                            <path d="M14.7,51.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H6.4l9.1-15.7c0.6,0.6,1.5,1.3,2.9,1.3c1.8,0,2.8-1.2,3.3-1.8
                                       c0.1-0.1,0.2-0.2,0.3-0.3c0.1,0.1,0.2,0.2,0.3,0.3c0.5,0.6,1.5,1.8,3.3,1.8c1.1,0,2-0.9,2-2c0-1.1-0.9-2-1.9-2
                                       c-0.1-0.1-0.2-0.2-0.3-0.4c-0.5-0.6-1.5-1.8-3.3-1.8c-1.8,0-2.8,1.2-3.3,1.8c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1-0.1-0.2-0.2-0.3-0.3
                                       c-0.1-0.2-0.3-0.4-0.5-0.6l5.7-9.9l3.8,6.6c0.6,1,1.8,1.3,2.7,0.7c1-0.6,1.3-1.8,0.7-2.7L25,13.2c-0.4-0.6-1-1-1.7-1
                                       s-1.4,0.4-1.7,1l-8.4,14.5c-0.1,0.1-0.2,0.3-0.3,0.4L1.2,48.5c0,0,0,0.1,0,0.1c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2
                                       c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2C1,50,1,50,1,50.1
                                       c0,0.1,0,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1
                                       c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.3,0.1,0.5,0.1c0,0,0,0,0,0
                                       c0,0,0,0,0,0c0,0,0,0,0,0H14.7z" />
                                            <path d="M40.7,12.3h3.1l-2.2,2.2c-0.6,0.6-0.6,1.5,0,2.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4l2.2-2.2v3.1
                                       c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5v-3.1l2.2,2.2c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2h3.1
                                       c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5h-3.1l2.2-2.2c0.6-0.6,0.6-1.5,0-2.1c-0.6-0.6-1.5-0.6-2.1,0L49,7.2V4
                                       c0-0.8-0.7-1.5-1.5-1.5S46,3.2,46,4v3.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0c-0.6,0.6-0.6,1.5,0,2.1l2.2,2.2h-3.1
                                       c-0.8,0-1.5,0.7-1.5,1.5S39.9,12.3,40.7,12.3z" />
                                        </g>
                                    </svg>
                                    <h2 class="card-front__heading">
                                        adventure
                                    </h2>
                                    <p class="card-front__text-price">
                                        From £199
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--ski">
                                        View me
                                    </p>
                                </div>
                            </div>

                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="images/pexels-ella-wei-15459474 (1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--ski">
                                skiing
                            </h3>
                            <p class="inside-page__text">
                                Why not take up exciting ski-in sessions and hit the slope?
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--ski">View deals</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Beach -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--beach">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                                        <path d="M57.2,28h-7.4c-0.4-4-2-7.7-4.4-10.6l3.2-3.2c0.8-0.8,0.8-2,0-2.8c-0.8-0.8-2-0.8-2.8,0l-3.2,3.2c-3-2.4-6.6-4-10.6-4.4V2.8
                                   c0-1.1-0.9-2-2-2s-2,0.9-2,2v7.4c-4,0.4-7.7,2-10.6,4.4l-3.2-3.2c-0.8-0.8-2-0.8-2.8,0c-0.8,0.8-0.8,2,0,2.8l3.2,3.2
                                   c-2.4,3-4,6.6-4.4,10.6H2.8c-1.1,0-2,0.9-2,2s0.9,2,2,2h7.4c0.4,4,2,7.7,4.4,10.6l-3.2,3.2c-0.8,0.8-0.8,2,0,2.8
                                   c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6l3.2-3.2c3,2.4,6.6,4,10.6,4.4v7.4c0,1.1,0.9,2,2,2s2-0.9,2-2v-7.4c4-0.4,7.7-2,10.6-4.4
                                   l3.2,3.2c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6c0.8-0.8,0.8-2,0-2.8l-3.2-3.2c2.4-3,4-6.6,4.4-10.6h7.4c1.1,0,2-0.9,2-2
                                   S58.3,28,57.2,28z M30,45.9c-8.8,0-15.9-7.2-15.9-15.9c0-8.8,7.2-15.9,15.9-15.9c8.8,0,15.9,7.2,15.9,15.9
                                   C45.9,38.8,38.8,45.9,30,45.9z" />
                                    </svg>

                                    <h2 class="card-front__heading">
                                        Adventure
                                    </h2>
                                    <p class="card-front__text-price">
                                        From £229
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--beach">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="images/istockphoto-1130418629-640_adpp_is.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--beach">
                                Trekking
                            </h3>
                            <p class="inside-page__text">
                                Relax and get sun-kissed tan in the sea or take up surfting for an adventure!
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--beach">View deals</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Camping -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--camping">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                                        <path d="M57,52.1c0-0.4-0.1-0.7-0.3-1.1l-6.3-10.8L32.4,9l2.3-4c0.6-1,0.2-2.2-0.7-2.7c-1-0.6-2.2-0.2-2.7,0.7L30,5.2L28.7,3
                                   c-0.6-1-1.8-1.3-2.7-0.7c-1,0.6-1.3,1.8-0.7,2.7l2.3,4l-18,31.1L3.3,51C3.1,51.3,3,51.7,3,52.1c0,0.4,0.1,0.7,0.3,1
                                   c0.4,0.6,1,1,1.7,1h50c0.7,0,1.4-0.4,1.7-1C56.9,52.8,57,52.4,57,52.1z M34.7,49.8C34.2,50,32.1,50,30,50s-4.2,0-4.7-0.2
                                   c-0.2-0.5-0.2-2.1-0.2-3.6l0-4.3c0-2.7,2.2-4.9,4.9-4.9s4.9,2.2,4.9,4.9l0,4.3C34.9,47.7,34.9,49.3,34.7,49.8z M13.1,42.1L28,16.5
                                   v16.7c-3.9,0.9-6.9,4.4-6.9,8.6l0,4.3c0,1.7,0,2.9,0.2,4H8.5L13.1,42.1z M38.7,50.1c0.2-1,0.2-2.3,0.2-4l0-4.3
                                   c0-4.2-2.9-7.7-6.9-8.6V16.5l15,25.7l4.6,7.9H38.7z" />
                                    </svg>
                                    <h2 class="card-front__heading">
                                        Adventure
                                    </h2>
                                    <p class="card-front__text-price">
                                        From £129
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--camping">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="images/pexels-kassandre-pedro-13240703 (1080p).mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--camping">
                                Paragliding
                            </h3>
                            <p class="inside-page__text">
                                Get your boots on for some hiking and explore all the beautiful scenery of nature!
                            </p>
                            <a href="#" class="inside-page__btn inside-page__btn--camping">View deals</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </main>









    <div class="hotel">
        <h1>Hotel</h1>
        <div class="hinfo">
            <img src="images/0111.jpg">
            <h3></h3>
            <a target="_blank" href="#">

                <div class="button">booking</div>
            </a>
        </div>

        <div class="hinfo">
            <img src="images/044.jpg">
            <h3></h3>
            <a target="_blank" href="#">
                <div class="button">booking</div>
            </a>
        </div>

        <div class="hinfo">
            <img src="images/033.jpg">
            <h3></h3>
            <a target="_blank" href="#">
                <div class="button">booking</div>
            </a>
        </div>

        <div class="hinfo">
            <img src="images/022.jpg">
            <h3></h3>
            <a target="_blank" href="#">
                <div class="button">booking</div>
            </a>
        </div>

    </div>


    <div id="reach">
        <h1>Reach</h1>
        <a href="https://www.ixigo.com/flights" target="_blank">
            <div class="transport">
                <h3>Flight</h3>
                <img src="images/plan.png" />
            </div>
        </a>

        <a href="https://www.ixigo.com/trains">
            <div class="transport">
                <h3>Train</h3>
                <img src="images/train.png" />
            </div>
        </a>

        <a href="https://www.ixigo.com/buses">
            <div class="transport">
                <h3>Bus</h3>
                <img src="images/bus.png" />
            </div>
        </a>

    </div>

    <div id="contact">
        <div class="fleft">
            <h2>Contact Us</h2>
            <p>
                <?php echo $row['Person']; ?><br />
                <?php echo $row['Mobile']; ?><br />
                <?php echo $row['Email']; ?><br />
                <?php echo $row['Email2']; ?><br />
                <?php echo $row['Address']; ?><br />
            </p>
        </div>
        <div class="fright">
            <form class="form">
                <h3>Subscribe Letter for Trip offers</h3><br />
                <input type="text" placeholder="Email" /><br />
                <input type="password" placeholder="Password" /><br />
                <input type="submit" value="Login" />
            </form>
        </div>

        <div>
            <iframe class="fbottom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13490.640458712658!2d73.6629632811346!3d24.598331526789867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e5e4a1e21081%3A0x6c6fe92a24bf849a!2sNehru%20Garden!5e1!3m2!1sen!2sin!4v1688968600247!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>
</body>

</htmL>