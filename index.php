<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3997b565b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="js/simple-lightbox.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Vibes 2.0</title>
</head>

<body>
    <div class="wrapper">


        <header class="flex">
            <figure>
                <img src="images/vibes.png" alt="LOGO VIBES">
            </figure>

            <nav class="flex">
                <a href="#">HOME</a>
                <a href="#">ABOUT</a>
                <a href="#">PORTFOLIO</a>
                <a href="#">TESTIMONIALS</a>
                <a href="#">CONTACT</a>
                <a href="#">PAGES</a>
            </nav>
        </header>

        <main>

            <button class="goutte">
                <i class="fas fa-tint"></i>
            </button>
            <div class="colorpicker">
                <p>Changer de thème</p>
                <button class="vert"></button>
                <button class="bleue"></button>
            </div>
            <section class="carrousel">

                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/slideramg1.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="images/slideramg2.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="images/slideramg3.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                </div>
                <div class="rond">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

            </section>


            <section class="argument flex padding">
                <article class="art_1">
                    <h3>Why Choose Us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum et consectetur ad maxime
                        obcaecati.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. At temporibus deleniti eum consectetur
                        tempora consequuntur <a href="">ex nobis amet.</a>
                    </p>

                </article>

                <article class="art_2">
                    <h3>Why You Get ?</h3>
                    <div class="arg flex">
                        <i class="fab fa-wordpress"></i>
                        <div class="arg_content">

                            <p>COLORFULL & COMPACT</p>
                            <p>Portfolio Wordpress Thèmes</p>
                        </div>
                    </div>

                    <div class="arg flex">
                        <i class="fas fa-cog"></i>
                        <div class="arg_content">

                            <p>COLORFULL & COMPACT</p>
                            <p>Portfolio Wordpress Thèmes</p>
                        </div>
                    </div>

                    <div class="arg flex">
                        <i class="far fa-paper-plane"></i>
                        <div class="arg_content">

                            <p>COLORFULL & COMPACT</p>
                            <p>Portfolio Wordpress Thèmes</p>
                        </div>
                    </div>
                </article>

                <article class="art_3">
                    <button class="accordion">NULLA CONSEQUAT MASSA</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">VIVAMUS ELEMENTUM SEMPER</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">ETIAM ULTRICIES NISI VEL</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </article>
            </section>

            <section class="portfolio">
                <div class="gallery">

                    <div class="gallery_content hover filter image">
                        <a href="images/amg_1.jpg" class="big"><img src="images/amg_1.jpg" alt="" /></a>
                    </div>

                    <div class="gallery_content hover filter image">
                        <a href="images/amg_2.jpg" class="big"><img src="images/amg_2.jpg" alt="" /></a>
                    </div>

                    <div class="gallery_content hover filter image">
                        <a href="images/amg_3.jpeg" class="big"><img src="images/amg_3.jpeg" alt="" /></a>
                    </div>

                    <div class="gallery_content hover filter image">
                        <a href="images/amg_4.jpg" class="big"><img src="images/amg_4.jpg" alt="" /></a>
                    </div>

                    <div class="gallery_content hover filter video">
                        <a href="https://www.youtube.com/watch?v=JNR_KZ-sBuY" target="_blank" data-fancybox="galery" data-caption="Video orbit">
                            <img src="./images/amg_5.jpg" alt="image" />
                            <div class="hover_gallery">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </a>
                    </div>

                    <div class="gallery_content hover filter image">
                        <a href="images/amg_6.jpg" class="big"><img src="images/amg_6.jpg" alt="" /></a>
                    </div>

                    <div class="gallery_content hover filter image">
                        <a href="images/amg_8.jpeg" class="big"><img src="images/amg_8.jpeg" alt="" /></a>
                    </div>

                    <div class="gallery_content hover filter audio">
                        <a href="images/amg_9.jpg" class="big"><img src="images/amg_9.jpg" alt="" /></a>
                        <div class="hover_gallery">
                            <i class="far fa-play-circle"></i>
                        </div>
                    </div>

                </div>
                <div class="filtre_portfolio flex padding">
                    <div class="filtre_content">

                        <a class="button ACTIVE" href="#" data-filter="all">ALL</a>
                        <a class="button" href="#" data-filter="audio">AUDIO</a>
                        <a class="button" href="#" data-filter="image">IMAGES</a>
                        <a class="button" href="#" data-filter="video">VIDEO</a>
                    </div>

                    <button class="btn btn-color-orange">LOAD MORE</button>

            </section>

            <section class="testimonial padding">
                <h2>CLIENT TESTIMONIALS</h2>
                <div class="trait"></div>

                <article class="client flex">
                    <img src="images/avatar_1.png" alt="Avatar_client">
                    <div class="client_content">
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                            perferendis ullam aperiam velit sed, suscipit cupiditate vero
                            debitis error iste facilis laudantium eius voluptas consectetur
                            repellat soluta doloribus illo pariatur.
                        </blockquote>
                        <p><strong>Tommy MARS</strong>, Designer</p>
                    </div>
                </article>

                <article class="client client_right flex">
                    <img src="images/avatar_2.png" alt="Avatar_client">
                    <div class="client_content">
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                            perferendis ullam aperiam velit sed, suscipit cupiditate vero
                            debitis error iste facilis laudantium eius voluptas consectetur
                            repellat soluta doloribus illo pariatur.
                        </blockquote>
                        <p class="right_text"><strong>Floor Simons</strong>, Startup CEO</p>
                    </div>
                </article>

                <article class="client flex">
                    <img src="images/avatar_3.png" alt="Avatar_client">
                    <div class="client_content">
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                            perferendis ullam aperiam velit sed, suscipit cupiditate vero
                            debitis error iste facilis laudantium eius voluptas consectetur
                            repellat soluta doloribus illo pariatur.
                        </blockquote>
                        <p><strong>Mick Neil</strong>, Rock Star</p>
                    </div>
                </article>

                <button class="btn btn-color-orange">BECOME OUR CLIENT</button>
            </section>

            <section class="buy_theme">
                <div class="buy_text">

                    <h2>NEW HORIZONS AWAIT</h2>
                    <div class="trait"></div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, ipsum enim! Expedita
                        cupiditate corrupti exercitationem. Minus quo veniam cupiditate iusto maxime mollitia molestias
                        eos, dolorem reprehenderit nobis! Sapiente, nostrum omnis?</p>
                    <button class="btn btn-color-white">BUY VIBES ON THEMESFOREST</button>
                </div>
            </section>

            <section id="contact" class="formulaire padding">
                <h2>GET IN TOUCH</h2>
                <div class="trait"></div>

                <form method="POST" action="php/traitement.php" class="flex">

                    <div class="left">

                        <div>
                            <label for="name">Your name <span>*</span></label>
                            <?php
                                    if(isset($_SESSION['error_champ']['name'])){
                                        echo ($_SESSION['error_champ']['name']);
                                    }
                                    ?>
                            <input type="text" name="name" id="name" required/>
                        </div>

                        <div>
                            <label for="email">Your email <span>*</span></label>
                            <?php

                                    if(isset($_SESSION['error_champ']['email'])){
                                        echo ($_SESSION['error_champ']['email']);
                                        
                                    }else if(isset($_SESSION['email_invalide'])){
                                        echo $_SESSION['email_invalide'];
                                    }
                                    ?>
                            <input type="email" name="email" id="email" required/>
                        </div>

                        <div>
                            <label for="phone">Your phone</label>
                            <input type="tel" name="phone" id="phone" />
                        </div>

                    </div>

                    <div class="right">
                        <div>
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" />
                        </div>

                        <div>
                            <label for="message">Message <span>*</span></label>
                            <?php
                                    if(isset($_SESSION['error_champ']['message'])){
                                        echo ($_SESSION['error_champ']['message']);
                                    }
                                    ?>
                            <textarea name="message" id="message" required></textarea>
                        </div>

                        <button class="btn btn-background-orange" type="submit">SEND</button>
                    </div>

                </form>

            </section>
                <div class="success"><?php

                                    if (isset($_SESSION['success'])) {
                                        echo $_SESSION['success'];
                                    }
                                    ?></div>

            <div class="fail"><?php

                                if (isset($_SESSION['error'])) {
                                    echo $_SESSION['error'];
                                }
                                ?></div>

            <section class="about flex padding">
                <article class="about_vibes">
                    <h4>ABOUT VIBES</h4>
                    <div class="trait_about"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio non accusantium natus
                        necessitatibus
                        <strong>aspernatur suscipit nesciunt aliquid</strong> atque sit quasi qui porro recusandae,
                        velit dicta dolores
                        numquam quo ab. Quos?</p>
                    <p>You can buy this responsive thème on <a href="#">ThemeForest</a>.</p>
                </article>

                <article class="newsletter">
                    <h4>NEWSLETTER</h4>
                    <div class="trait_about"></div>
                    <p><strong>VIBES</strong> containts fully working <strong>MailChimp</strong><br>subscribe form</p>
                    <form action="#">
                        <div>
                            <input type="email" name="news_mail" id="news_mail" placeholder="Your Email Address" />
                        </div>
                        <button class="btn btn-color-white">SUBSCRIBE</button>
                    </form>
                </article>

                <article class="social">
                    <h4>SOCIAL MEDIA</h4>
                    <div class="trait_about"></div>

                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-snapchat-ghost"></i>
                    <i class="fab fa-linkedin-in"></i>
                </article>
            </section>

        </main>

        <footer class="flex padding">
            <p>&copy; 2020 <a href="http://benjaminmonvoisin.fr">BENJAMIN.M</a></p>
            <nav>
                <a href="#" title="HOME">Home</a>
                <a href="#" title="ELEMENTS">Elements</a>
                <a href="#" title="DOCUMENTATION">Documentation</a>
            </nav>
        </footer>
    </div>


    <script src="js/simple-lightbox.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="js/colorpicker.js"></script>
</body>

</html>
<?php
session_destroy();
?>