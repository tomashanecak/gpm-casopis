<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165740365-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-165740365-1');
    </script>

    <!-- Google adsense-->
    <script data-ad-client="ca-pub-8700113901026031" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- Hlavná stránka časopisu Park-->
    <!--- basic page needs 
    ================================================== -->
    <meta charset="utf-8">
    <title>GPM - Časopis Domov</title>
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
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header header">

        <div class="header__logo">
            <a class="logo" href="index.html">
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
                <li class="current"><a href="index.html" title="">Domov</a></li>
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


    <!-- featured 
    ================================================== -->
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">

                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/Ima3kulacia.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="page-about.html">Info</a></span>

                                <h1><a href="page-about.html" title="">Čo je to Časopis Park? Zisti o nás viac!</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/TomiHanecak.jpg" alt="">
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a href="#0">Tomi Hanečák</a></li>
                                        <li>4. Mája 2020</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/movie.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Filmy</a></span>

                                <h1><a href="articles/movies/top5filmov/single-standard.html" title="">Top 5 filmov, ktoré si musíte pozrieť po karanténe.</a></h1>

                                <div class="entry__info">
                                    <a href="articles/movies/top5filmov/single-standard.html" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/DavidPopovic.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">Dávid Popovič</a></li>
                                        <li>4. Máj 2020</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/coding.jpeg');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">IT/Development</a></span>

                                <h1><a href="#0" title="">Pridaj sa k nám! Hľadáme študentov, ktorých bavia informačné technológie do nášho teamu.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/TomiHanecak.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">Tomi Hanečák</a></li>
                                        <li>4. Mája 2020</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->
                    
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div>
    </section> <!-- end s-featured -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row entries-wrap wide">
            <div class="entries">

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="page-about.html" class="item-entry__thumb-link">
                                <img src="images/Ima3kulacia.jpg"  alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">    
                            <div class="item-entry__cat">
                                <a href="categories/kategoria-skola.html">Info</a> 
                            </div>
    
                            <h1 class="item-entry__title"><a href="page-about.html">Čo je to Časopis Park? Zisti o nás viac!</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="page-about.html">4. Máj 2020</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="articles/movies/top5filmov/single-standard.html" class="item-entry__thumb-link">
                                <img src="images/movie.jpg" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="categories/kategoria-filmy.html">Filmy</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="articles/movies/top5filmov/single-standard.html">Top 5 filmov, ktoré si musíte pozrieť po karanténe.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="articles/movies/top5filmov/single-standard.html">4. Máj 2020</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="images/coding.jpeg" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">IT/Development</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="single-standard.html">Pridaj sa k nám! Hľadáme študentov, ktorých bavia informaćné technológie do nášho teamu.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">4. Máj 2020</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="images/vysledok.jpg" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="categories/kategoria-recepty.html">Recepty</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="articles/recipes/VtacieMlieko/VtacieMlieko.html">Recept na vtáčie mlieko.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="articles/recipes/VtacieMlieko/VtacieMlieko.html">4. Máj 2020</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="articles/music/top5skladieb/top5skladieb.html" class="item-entry__thumb-link">
                                <img src="images/vinyl.jpg">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="categories/kategoria-hudba.html">Hudba</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="articles/music/top5skladieb/top5skladieb.html"> Top 5 populárnych skladieb, vydaných v období karantény.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="articles/music/top5skladieb/top5skladieb.html">5. Máj 2020</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="articles/music/top5skladieb/top5skladieb.html" class="item-entry__thumb-link">
                                <img src="images/teacher.jpg">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="categories/kategoria-skola.html">Škola</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="articles/school/ucitelia/ucitelia.html"> Profesori ako ste ich ešte nevideli!</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="articles/school/ucitelia/ucitelia.html">12. Máj 2020</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="#0" class="item-entry__thumb-link">
                                <img src="images/thumbs/post/watch-400.jpg" 
                                     srcset="images/thumbs/post/watch-400.jpg 1x, images/thumbs/post/watch-800.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="#0">Už Čoskoro...</a>
                            </div>
    
                            <h1 class="item-entry__title"><a href="#0">Nové články</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="#0">June 12, 2018</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->

            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

        <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

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
                            <li><a href="categories/kategoria-skola.html">Škola</a></li>
                            <li><a href="categories/kategoria-filmy.html">Filmy</a></li>
                            <li><a href="categories/kategoria-hudba.html">Hudba</a></li>
                            <li><a href="categories/kategoria-recepty.html">Recepty</a></li>
                            <li><a href="categories/kategoria-hry.html">Hry</a></li>
                            <li><a href="categories/kategoria-sport.html">Šport</a></li>
                        </ul>
                    </div> <!-- end categories -->
        
                    <div class="col-six md-six mob-full sitelinks">
                        <h3>Ostatné</h3>
                        
                        <ul class="linklist">
                            <li><a href="index.html">Domov</a></li>
                            <li><a href="single-video.html">Archív</a></li>
                            <li><a href="NasTeam.html">Náš team</a></li>
                            <li><a href="page-about.html">O nás</a></li>
                            <li><a href="page-contact.html">Kontakt</a></li>
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

                    <p> Časopis Park je projektom študentov Gymnázia Park mládeže 5 v Košiciach. Naším cieľom je prinášať študentom a učiteľom najčerstvejšie novinky z diania na našej škole a vo svete. 
                       Taktiež pravidelne publikume rubriky o Filmoch, Hrách či Hudbe. Organizujeme rôzne projekty a súťaže a zásobujeme našich čitateľov dávkou zábavy vo forme memečiek, alebo im zachraňujeme krk 
                       našimi žolíkmi. Ďakujeme, že ste navštívili našu novú webstránku. Ak máte akýkoľvek návrh alebo otázku napíšte nám ho <a href="page-contact.html">tu</a>.
                    </p>

                </div> <!-- end s-footer__about -->

                <div class="col-six tab-full s-footer__subscribe">
                        
                    <h4>Prihlás sa na odber noviniek</h4>

                    <p>Chceš byť stále v obraze a informovaný o nových súťažiach a článkoch, alebo si chceš dokonca zvýšiť šancu na výhru žolíka? Prihlás sa na odber noviniek pomocou tvojej e-mailovej adresy a už ti nikdy nič neunikne! :)</p>

                    <div class="subscribe-form">
                        <form action="includes/email.php" id="mc-form" class="group" novalidate="true" method="POST">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Tvoja mailová adresa" required="">
                
                            <button type="submit" name="subscribe">Prihlásiť sa</button>
                
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

<a href="cms-admin.php"><p style="font-weight:bold; position: relative; left: 0px; padding-top: 20px;">CMS Admin</p></a>
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