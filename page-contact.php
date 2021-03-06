<?php

    include_once "includes/dbh.php";

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!-- Hlavná stránka časopisu Park-->
    <!--- basic page needs 
    ================================================== -->
    <meta charset="utf-8">
    <title>GPM Časopis</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <!-- <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->


    <!-- header
    ================================================== -->
    <header class="s-header header">

        <div class="header__logo">
            <a class="logo" href="index.php">
                <img src="images/main-logo.png" alt="Homepage">
            </a>
        </div> <!-- end header__logo -->

        <a class="header__search-trigger" href="#0"></a>
        <div class="header__search">

            <form role="search" method="get" class="header__search-form" action="#">
                <label>
                    <span class="hide-content">Hľadať</span>
                    <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Zatvoriť</a>

        </div>  <!-- end header__search -->

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Prejsť na</h2>

            <ul class="header__nav">
                <li class="current"><a href="index.php" title="">Domov</a></li>
                <li class="has-children">
                    <a href="#0" title="">Kategórie</a>
                    <ul class="sub-menu">
                        <li><a href="categories/kategoria-skola.html">Škola</a></li>
                        <li><a href="categories/kategoria-filmy.html">Filmy</a></li>
                        <li><a href="categories/kategoria-hudba.html">Hudba</a></li>
                        <li><a href="categories/kategoria-recepty.html">Recepty</a></li>
                        <li><a href="categories/kategoria-hry.html">Hry</a></li>
                        <li><a href="categories/kategoria-sport.html">Šport</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="#0" title="">Archív</a>
                    <ul class="sub-menu">
                        <li><a href="single-video.html">Predošlé čísla PDF</a></li>
                        <!-- <li><a href="single-audio.html">Audio Post</a></li>
                        <li><a href="single-standard.html">Standard Post</a></li> -->
                    </ul>
                </li>
                <li><a href="NasTeam.html" title="">Náš Team</a></li>
                <li><a href="page-about.html" title="">O nás</a></li>
                <li><a href="page-contact.php" title="">Kontakt</a></li>
            </ul> <!-- end header__nav -->

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Zatvoriť</a>

        </nav> <!-- end header__nav-wrap -->

    </header> <!-- s-header -->

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">Kontaktuj nás</h1>
                <p class="lead">
                    Kde a kedy nás nájdeš?
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                <p>
                <img src="images/thumbs/contact/contact-1000.jpg" 
                     srcset="images/thumbs/contact/contact-2000.jpg 2000w, 
                             images/thumbs/contact/contact-1000.jpg 1000w, 
                             images/thumbs/contact/contact-500.jpg 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>

                <h2>KONTAKT</h2>

                <p>
                    Časopis Park môžeš kontaktovať tak, že sa zastavíš u niektorého z našich zástupcov (ktorých nájdeš <a href="#0">tu</a>) počas veľkej prestávky.
                    Najlepšie však bude ak nám napíšeš email na <strong>mail@mail.com</strong> alebo sa nám ozveš na niektorej z našich sociálnych sietí (link dole).</p>
                

                <div id="map-wrap">
                    <!-- <div id="map-container"></div>
                    <div id="map-zoom-in"></div>
                    <div id="map-zoom-out"></div> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2631.1435586706048!2d21.252202515850453!3d48.740954416921966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ee0f2770bbef3%3A0x577e578fb9404e12!2zUGFyayBtbMOhZGXFvmUgNjM0LzUsIDA0MCAwMSBLb8WhaWNl!5e0!3m2!1ssk!2ssk!4v1588626717318!5m2!1ssk!2ssk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
                </div> 

                <div class="row">
                    <div class="col-six tab-full">
                        <h4>Adresa</h4>

                        <p>
                        Park mládeže 5<br>
                        Košice, Slovensko<br>
                        040 01
                        </p>

                    </div>

                    <div class="col-six tab-full">
                        <h4>Mail</h4>

                        <p>mail@mail.com<br>
                        tomas.hanecak@icloud.com <br>
                        </p>

                    </div>
                </div>

                <h4>Napíš nám tu:</h4>

                <form name="cForm" id="cForm" class="contact-form" method="post" action="includes/contact-formulary.php">
                    <fieldset>

                        <div>
                            <input name="cName" id="cName" class="full-width" placeholder="Tvoje Meno*" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" id="cEmail" class="full-width" placeholder="Tvoj Email*" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cClass" id="cWebsite" class="full-width" placeholder="Trieda" value="" type="text">
                        </div>

                        <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Tvoja správa*"></textarea>
                        </div>

                        <button type="submit" name ="submit" class="submit btn btn--primary btn--large full-width">Odoslať spŕavu</button>

                    </fieldset>
                </form> 


                <?php 
                    //error handling
                        
                    if (!isset($_GET["error"])) {
                        echo "";

                    } else {
                        $contactCheck = $_GET["error"];

                        if ($contactCheck == "empty") {
                            echo "<p style = 'font-weight: bold; color:red;'> Prosím vyplňte všetky povinné okná! </p>";
                            //keep the page scroll
                            echo " <script>
                            document.addEventListener('DOMContentLoaded', function(event) { 
                                var scrollpos = localStorage.getItem('scrollpos');
                                if (scrollpos) window.scrollTo(0, scrollpos);
                            });
                    
                            window.onbeforeunload = function(e) {
                                localStorage.setItem('scrollpos', window.scrollY);
                            };
                            </script>";
                            
                        } elseif($contactCheck == "invalidmail")
                            echo "<p style = 'font-weight: bold; color:red;'> Prosím zadajte platnú E-Mailovú adresu!</p>";  
                            //keep the page scroll
                            echo " <script>
                            document.addEventListener('DOMContentLoaded', function(event) { 
                                var scrollpos = localStorage.getItem('scrollpos');
                                if (scrollpos) window.scrollTo(0, scrollpos);
                            });
                    
                            window.onbeforeunload = function(e) {
                                localStorage.setItem('scrollpos', window.scrollY);
                            };
                            </script>";  
                    }
                ?>

            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section> <!-- end s-content -->


    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row">

            <div class="col-seven md-six tab-full popular">
                <h3>Populárne články</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/tulips-150.jpg" alt="">
                        </a>
                        <h5>Populárny článok</h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>Od</span> <a href="#0">Meno Priezvisko</a></span>
                            <span class="popular__date"><span>dňa</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Populárny článok</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>Od</span> <a href="#0">Meno Priezvisko</a></span>
                            <span class="popular__date"><span>dňa</span> <time datetime="2018-06-12">30. Mája, 2020</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/shutterbug-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Populárny článok</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>Od</span> <a href="#0">Meno Priezvisko</a></span>
                            <span class="popular__date"><span>dňa</span> <time datetime="2018-06-12">30. Mája, 2020</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/cookies-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Populárny článok</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>Od</span> <a href="#0"> Meno Priezvisko</a></span>
                            <span class="popular__date"><span>dňa</span> <time datetime="2018-06-12">30. Mája, 2020</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/beetle-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Populárny článok</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>Od</span> <a href="#0">Meno Priezvisko</a></span>
                            <span class="popular__date"><span>dňa</span> <time datetime="2018-06-12">30. Mája, 2020</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/salad-150.jpg" alt="">
                        </a>
                        <h5>Populárny článok</h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>Od</span> <a href="#0"> Meno Priezvisko</a></span>
                            <span class="popular__date"><span>dňa</span> <time datetime="2018-06-12">30. Mája, 2020</time></span>
                        </section>
                    </article>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->

            <div class="col-four md-six tab-full end">
                <div class="row">
                    <div class="col-six md-six mob-full categories">
                        <h3>Kategórie</h3>
        
                        <ul class="linklist">
                            <li><a href="#0">Škola</a></li>
                            <li><a href="#0">Filmy</a></li>
                            <li><a href="#0">Hudba</a></li>
                            <li><a href="#0">Recepty</a></li>
                            <li><a href="#0">Hry</a></li>
                            <li><a href="#0">Šport</a></li>
                        </ul>
                    </div> <!-- end categories -->
        
                    <div class="col-six md-six mob-full sitelinks">
                        <h3>Ostatné</h3>
        
                        <ul class="linklist">
                            <li><a href="#0">Domov</a></li>
                            <li><a href="#0">Archív</a></li>
                            <li><a href="#0">Náš team</a></li>
                            <li><a href="#0">O nás</a></li>
                            <li><a href="#0">Kontakt</a></li>
                            <li><a href="#0">Zásady používania</a></li>
                        </ul>
                    </div> <!-- end sitelinks -->
                </div>
            </div>
        </div> <!-- end row -->

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-six tab-full s-footer__about">
                        
                    <h4>O časopise Park</h4>

                    <p>Fugiat quas eveniet voluptatem natus. Placeat error temporibus magnam sunt optio aliquam. Ut ut occaecati placeat at. 
                    Fuga fugit ea autem. Dignissimos voluptate repellat occaecati minima dignissimos mollitia consequatur.
                    Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa error 
                    temporibus magnam est voluptatem.</p>

                </div> <!-- end s-footer__about -->

                <div class="col-six tab-full s-footer__subscribe">
                        
                    <h4>Prihlás sa na odber noviniek</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <ul class="footer-social">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-instagram"></i></a>
                        </li>
                        <!-- <li>
                            <a href="#0"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-pinterest"></i></a>
                        </li> -->
                    </ul>
                </div>

                <div class="col-six">
                    <div class="s-footer__copyright">
                        <span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Všetky práva vyhradené | Táto stránka bola vytvorená zo <i class="fa fa-heart" aria-hidden="true"></i> od <a href="https://www.facebook.com/Tomas.Hani.Hanecak" target="_blank">Tomi Hanečák</a>
</span>
                    </div>
                </div>
                
            </div>
        </div> <!-- end s-footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>