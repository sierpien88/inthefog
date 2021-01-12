<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIRRORMAN | SHE.XIST 'IN THE FOG' - TRIP-HOP FOR CHERNOBYL CHILDREN</title>
    <meta name="description"
        content="Mirrorman | She.xist 'In The Fog. The entire proceeds from this album will support the poorest children from Ukraine and Belarus suffering from genetic disorders resulting from the nuclear disaster which occurred at the Chernobyl Nuclear Power Plant in 1986" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src='js/html5media.min.js'></script>
</head>

<body>


    <!-- BG Music Player -->
    <audio src="mix/ITF_1/2_Inertia.mp3" controls loop class="hidden" id="bg-audio"></audio>
    <div class="bg"></div>
    <div class="top">
        <div class="language">
            <a id="lang_pl" href="?lang=pl" @if($lg=='pl' ) class="active" @endif>PL</a>
            <span> | </span>
            <a id="lang_en" href="?lang=en" @if($lg=='en' ) class="active" @endif>EN</a>
        </div>
        <!-- <div class="audio">
    <span class="t-uppercase">Audio: </span>
    <input type="button" value="ON" class="active on-btn">
    <span> | </span>
    <input type="button" value="OFF" class="off-btn">
</div> -->
        <div class="top-nav">
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-mobile-button-container' for="menu-toggle">
                <div class='menu-mobile-button'></div>
            </label>
            <ul class="menu-mobile">
                <li><a href="#mobile-item-2"><?php echo $lang['music']; ?></a></li>
                <li><a href="#mobile-item-1"><?php echo $lang['project']; ?></a></li>
                <li><a href="#mobile-item-3"><?php echo $lang['mission']; ?></a></li>
                <li><a href="#mobile-item-7"><?php echo $lang['pictures']; ?></a></li>
                <li><a href="#mobile-item-4"><?php echo $lang['contact']; ?></a></li>
            </ul>
        </div>
    </div>
    <div class="bottom">
        <div class="widget-1">
            <div class="col-1">
                <!-- <p class="head"><?php echo $lang['buy_cd']; ?></p>
                <div class="sub-col-1">
                    <span>CD</span>
                    <a href="#/slide5">
                        <img src="images/paypal.png" />
                    </a>
                    <a href="#/slide5">
                        <img src="images/payu.png" />
                    </a>
                </div> -->
                <div>
                    <a href=" https://mirrormanshexist.bandcamp.com/">
                        <img src="images/bandcamp.png" alt="Bandcamp" class="img-fluid"></a>
                    <a href="https://open.spotify.com/album/2a5dxuk3Bfh72S2UbYd8eY?si=y6XuXqsrREWOGpG-nYIvqg ">
                        <img src="images/icons/logo-spotify.svg" alt="Spotify" class="img-fluid"></a>
                    <a
                        href=" https://www.amazon.com/Fog-II-Mirrorman-She-xist/dp/B08S7HFX73/ref=sr_1_1?dchild=1&keywords=mirrorman+she.xist&qid=1610403321&sr=8-1 ">
                        <img src="images/icons/amazon-2.svg" alt="Amazon" class="img-fluid"></a>
                    <a href="https://music.apple.com/pl/album/in-the-fog-ii/1547562677?l=pl ">
                        <img src="images/icons/apple-itunes.svg" alt="Apple Itunes" class="img-fluid"></a>
                    <a href="https://www.youtube.com/INTHEFOGPROJECT ">
                        <img src="images/icons/youtube-2.svg" alt="Youtube" class="img-fluid"></a>
                </div>
                <!-- <div class="sub-col-2">
                    <span><?php // echo $lang['download_mp3']; ?></span>
                    <a href="https://itunes.apple.com/us/album/in-the-fog/id514145069" target="_blank">
                        <img src="images/itunes.png" />
                    </a>
                    <a href="https://store.cdbaby.com/cd/mirrormanshexist" target="_blank">
                        <img src="images/cdbaby.png" />
                    </a>
                </div> -->
            </div>
            <div class="col-2">
                <?php echo $lang['income']; ?>
            </div>
            <p></p>
        </div>
        <div class="widget-3">
            <p class="head"><?php echo $lang['contact']; ?></p>
            <div class="icons">
                <a href="https://www.facebook.com/inthefogproject" target="_blank"><img src="images/icon-1.png" /></a>
                <a href="https://www.youtube.com/user/INTHEFOGPROJECT" target="_blank"><img
                        src="images/icon-2.png" /></a>
                <a href="https://www.chernobyl-international.com/" target="_blank"><img src="images/icon-3.png" /></a>
            </div>
            <div class="mail">
                <p><?php echo $lang['ask_us']; ?><a href="mailto:info@inthefog.net"
                        target="_blank">info@inthefog.net</a>
                </p>
            </div>
        </div>
        <div class="widget-2">
            <div class="col-1">
                <p class="head"><?php echo $lang['for_media']; ?></p>
                <a href="docs/PressPack-InTheFog.pdf"><input type="button" value="pobierz press-pack" /></a>
            </div>
        </div>
    </div>

    <div class="site-wrap">
        <div class="overlay"></div>
        <div class="h1_box">
            <h1>In The Fog</h1>
            <h2>Mirrorman</h2>
            <h2>She.xist</h2>
            <div class="animation">
                <span class="item1">In the fog</span>
                <span class="item2">In the fog</span>
                <span class="item3">In the fog</span>
                <span class="item4">Mirrorman | She.xist</span>
                <span class="item5">Mirrorman | She.xist</span>
            </div>
        </div>
        <div class="menu">
            <div class="panel__nav item-1"><a onclick="project()" href="#/slide1"><?php echo $lang['project']; ?></a>
            </div>
            <div class="panel__nav item-2"><a onclick="buy_cds()" href="#/slide5"><?php echo $lang['buy_cds']; ?></a>
            </div>
            <div class="panel__nav item-3"><a onclick="mission()" href="#/slide3"><?php echo $lang['mission']; ?></a>
            </div>
            <div class="panel__nav item-5"><a onclick="music()" href="#/slide2"><?php echo $lang['music']; ?></a></div>
            <div class="panel__nav item-4"><a onclick="contact()" href="#/slide4"><?php echo $lang['contact']; ?></a>
            </div>
            <div class="panel__nav item-6"><a onclick="pictures()" href="#/slide7"><?php echo $lang['pictures']; ?></a>
            </div>
        </div>
        <div class="impress-not-supported">
            <div id="impress">
                <div id="start" class="step"></div>
                <div id="slide1" class="step" data-x="-1800">
                    <div class="description">
                        <h3><?php echo $lang['project']; ?></h3>
                        <div class="main-carousel">
                            <div class="carousel-cell cell1">
                                <?php echo $lang['mirrorman_and_she']; ?>
                            </div>
                            <div class="carousel-cell cell2">
                                <?php echo $lang['mirrorman_and_she_2']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slide2" class="step" data-x="1800" data-y="1500">
                    <div class="description">
                        <div class="main-carousel-2">
                            <div id="cd2" class="carousel-cell">
                                <div class="col-lg-4">
                                    <div class="w-100 play">
                                        <img src="images/cd1.jpg" class="cvr" />
                                        <div class="player-box2">
                                            <div id="audio">
                                                <audio id="audio1" preload controls>Your browser does not support
                                                    HTML5
                                                    Audio! 😢</audio>
                                            </div>
                                            <div class="tracks">
                                                <div class="nowPlay">
                                                    <span id="npTitle1"></span>
                                                </div>
                                                <div class="control">
                                                    <a id="btnPrev1"><img src="images/player-prev.png" /></a>
                                                    <a id="btnNext1"><img src="images/player-next.png" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <a href="#/slide5"><input type="button" value="Pobierz teksty" /></a> -->
                                            <input type="button" value="<?php echo $lang['buy_cd']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="cd-desc">
                                        <h2>Mirrorman | She.xist „In the Fog Part II“</h2>
                                        <ul>
                                            <div class="col-lg-6">
                                                <h4><?php echo $lang['tracklist']; ?>:</h4>
                                                <ul class="cd-track-list">
                                                    <li>Intro: 1986
                                                        <audio src="mix/ITF_2/1_Intro_1986.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>This is Pripyat
                                                        <audio src="mix/ITF_2/2_This_is_Pripyat.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Down is Fine
                                                        <audio src="mix/ITF_2/3_Down_is_Fine.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Midnight Sun
                                                        <audio src="mix/ITF_2/4_Midnight_Sun.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Coming Back Home
                                                        <audio src="mix/ITF_2/5_Coming_Back_Home.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Fragile Hearts
                                                        <audio src="mix/ITF_2/6_Fragile_Hearts.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>No Rewind
                                                        <audio src="mix/ITF_2/7_No_Rewind.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Locked Doors
                                                        <audio src="mix/ITF_2/8_Locked_Doors.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul>
                                                    <li>Mirrorman: <?php echo $lang['music']; ?> /
                                                        <?php echo $lang['production']; ?></li>
                                                    <li>She.xist: <?php echo $lang['vocal']; ?> /
                                                        <?php echo $lang['lyrics']; ?></li>
                                                    <li>Emily Maguire: <?php echo $lang['vocal']; ?> /
                                                        <?php echo $lang['lyrics']; ?></li>
                                                    <li>Marta Złakowska: <?php echo $lang['vocal']; ?> /
                                                        <?php echo $lang['lyrics']; ?></li>
                                                    <li>Carine Fierobe: <?php echo $lang['vocal']; ?> /
                                                        <?php echo $lang['lyrics']; ?></li>
                                                    <li>Elizabeth Cole: <?php echo $lang['vocal']; ?></li>
                                                    <li>Thomas Haydock: Saksofon</li>
                                                    <li>Endless Melancholy: piano</li>
                                                    <li>Mix/Mastering: Marcin Cichy, PlugAudio</li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="cd1" class="carousel-cell">
                                <div class="col-lg-4">
                                    <div class="w-100 play">
                                        <img src="images/cd2.jpg" class="cvr" />
                                        <div class="player-box1">
                                            <div id="audio">
                                                <audio id="audio2" preload controls>Your browser does not support
                                                    HTML5
                                                    Audio! 😢</audio>
                                            </div>
                                            <div class="tracks">
                                                <div class="nowPlay">
                                                    <span id="npTitle2"></span>
                                                </div>
                                                <div class="control">
                                                    <a id="btnPrev2"><img src="images/player-prev.png" /></a>
                                                    <a id="btnNext2"><img src="images/player-next.png" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <a href="#/slide5"><input type="button" value="Pobierz teksty" /></a> -->
                                            <input type="button" value="Kup płytę" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="cd-desc">
                                        <h2>Mirrorman | She.xist „In the Fog Part I“</h2>
                                        <ul>
                                            <div class="col-lg-6">
                                                <h4><?php echo $lang['tracklist']; ?>:</h4>
                                                <ul class="cd-track-list">
                                                    <li>Forgotten Afternoons
                                                        <audio src="mix/ITF_1/1_Forgotten_Afternoons.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Inertia
                                                        <audio src="mix/ITF_1/2_Inertia.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Limits of Hope
                                                        <audio src="mix/ITF_1/3_Limits_of_Hope.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Geiger Land
                                                        <audio src="mix/ITF_1/4_Geiger_Land.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Castle in the Fog
                                                        <audio src="mix/ITF_1/5_Castle _in_the_Fog.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Crown King
                                                        <audio src="mix/ITF_1/6_Crown_King.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                    <li>Core Reactor
                                                        <audio src="mix/ITF_1/7_Core_Reactor.mp3" controls loop
                                                            class="hidden" class="hidden-player"></audio>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul>
                                                    <li>Mirrorman: <?php echo $lang['music']; ?> /
                                                        <?php echo $lang['production']; ?></li>
                                                    <li>She.xist: <?php echo $lang['vocal']; ?> /
                                                        <?php echo $lang['lyrics']; ?></li>
                                                    <li>Miks/<?php echo $lang['production']; ?>: Piotr Iwanek, <a
                                                            href="http://totalsound.pl"
                                                            target="_blank">totalsound.pl</a></li>
                                                    <li>Mastering: Mikołaj Bugajak, <a href="http://audio-games.pl"
                                                            target="_blank">audio-games.pl</a></li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slide3" class="step" data-x="2900" data-y="800">
                    <div class="description">
                        <h3><?php echo $lang['mission']; ?></h3>
                        <div class="main-carousel">
                            <div class="carousel-cell cell1">
                                <?php echo $lang['mission-cell1']; ?>
                            </div>
                            <div class="carousel-cell cell2">
                                <?php echo $lang['mission-cell2']; ?>
                            </div>
                            <div class="carousel-cell cell3">
                                <?php echo $lang['mission-cell3']; ?>
                            </div>
                            <div class="carousel-cell cell4">
                                <?php echo $lang['mission-cell4']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slide4" class="step" data-x="2900" data-y="-900">
                    <div class="description">
                        <h3><?php echo $lang['contact']; ?></h3>
                        <p>Chcesz wiedzieć więcej? <br />
                            Zapytaj: <a href="mailto:info@inthefog.net" target="_blank">info@inthefog.net</a></p>
                        <div class="icons">
                            <a href="https://www.facebook.com/inthefogproject" target="_blank"><img
                                    src="images/icon-1.png" /></a>
                            <a href="https://www.youtube.com/user/INTHEFOGPROJECT" target="_blank"><img
                                    src="images/icon-2.png" /></a>
                            <a href="https://www.chernobyl-international.com/" target="_blank"><img
                                    src="images/icon-3.png" /></a>
                        </div>
                    </div>

                </div>
                <div id="slide5" class="step" data-x="-2200" data-y="-900">
                    <div class="description">
                        <p class="desc">
                            <?php echo $lang['moneyforchildrens']; ?>
                        </p>
                        <p class="price">Cena wraz z kosztami przesylki: 26,99 PLN</p>

                        <p>W celu zrealizowania
                            przelewu wypełnij poniższy formularz.
                            <br />Następnie wyślij maila na info@inthefog.net i podaj następujące dane:
                            <br />

                        <ul>
                            <li class="standard-size">a. ilość zakupionych płyt</li>
                            <li class="standard-size">b. adres do wysyłki</li>
                            <li class="standard-size">c. swoje dane kontaktowe (imię, nazwisko, nr telefonu)</li>

                        </ul>

                        <div class="covers">
                            <div class="col-lg-6">
                                <img class="cover" src="images/cd1.jpg" />
                                <div class="cd">
                                    <a href="https://mirrormanshexist.bandcamp.com/releases" target="_blank">
                                        <img src="images/pp.gif" class="paypal-btn" />
                                    </a>
                                </div>
                                <!-- <form action="" method="post" name="payform">
                                    <label class="pl">Imię: </label><br><input type="text" name="first_name"><br>
                                    <label class="pl">Nazwisko: </label><br><input type="text" name="last_name"><br>
                                    <label class="pl">Email: </label><br><input type="email" name="email"><br>
                                    <p>Zapłać poprzez:<img src="images/payu-dark.png" /></p>
                                </form> -->
                            </div>
                            <div class="col-lg-6">
                                <img class="cover" src="images/cd2.jpg" />
                                <div class="cd">
                                    <a href="https://mirrormanshexist.bandcamp.com/releases" target="_blank">
                                        <img src="images/pp.gif" class="paypal-btn" />
                                    </a>
                                </div>
                                <!-- <form action="" method="post" name="payform">
                                    <label class="pl">Imię: </label><br><input type="text" name="first_name"><br>
                                    <label class="pl">Nazwisko: </label><br><input type="text" name="last_name"><br>
                                    <label class="pl">Email: </label><br><input type="email" name="email"><br>
                                    <p>Zapłać poprzez:<img src="images/payu-dark.png" /></p>
                                </form> -->
                            </div>
                        </div>
                    </div>

                </div>
                <div id="slide7" class="step" data-x="2900" data-y="800">
                    <div class="description video-container">
                        <div class="main-carousel-3">
                            <div class="carousel-cell">
                                <div class="col-lg-6">
                                    <iframe width="100%" height="362" src="https://www.youtube.com/embed/1k3zsrRShfY"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="video-title"> MIRRORMAN | SHE.XIST feat. THOMAS HAYDOCK - 'THIS IS
                                        PRIPYAT'
                                    </h4>
                                    <p class="ml-3"><?php echo $lang['yttext1']; ?></p>
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="col-lg-6">
                                    <iframe width="100%" height="362" src="https://www.youtube.com/embed/P0N30LJTPTk"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="video-title"> MIRRORMAN | SHE.XIST feat. ENDLESS MELANCHOLY & ELIZABETH
                                        COLE - 'INTRO: 1986'
                                    </h4>
                                    <p class="ml-3"><?php echo $lang['yttext2']; ?></p>
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="col-lg-6">
                                    <iframe width="100%" height="362" src="https://www.youtube.com/embed/pVaCd5i7TxQ"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="video-title"> MIRRORMAN | SHE.XIST - 'CASTLE IN THE FOG'
                                    </h4>
                                    <p class="ml-3"><?php echo $lang['yttext3']; ?></p>
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="col-lg-6">
                                    <iframe width="100%" height="362" src="https://www.youtube.com/embed/7O77Lj8ZPcs"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="video-title"> MIRRORMAN | SHE.XIST - 'INERTIA'
                                    </h4>
                                    <p class="ml-3"><?php echo $lang['yttext4']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fallback-message">
                        <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented
                            with a
                            simplified version of this presentation.</p>
                        <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b>
                            browser.
                        </p>
                    </div>
                </div>
                <div class="mobile-view">
                    <div class="description"></div>
                </div>
            </div>

            <script type="text/javascript" src="js/impress.js"></script>
            <script>
            $(document).ready(function() {

                function tryWidth() {
                    var w = window.innerWidth;

                    // $( ".enter" ).on( "click", function() {
                    $(".on-btn").click();
                    // });

                    if (w > 767) {
                        impress().init();
                    } else {
                        var slide1 = "<div id='mobile-item-1'><h3>" + $('#slide1 h3').html() + "</h3>" + $(
                            '#slide1 .cell1').html() + $('#slide1 .cell2').html() + "</div>";
                        var slide2 = "<div id='mobile-item-2'>" + $('#slide2 #cd1 .play').html() + $(
                            '#slide2 #cd1 .cd-desc').html() + $('#slide2 #cd2 .play').html() + $(
                            '#slide2 #cd2 .cd-desc').html() + "</div>";
                        var slide3 = "<div id='mobile-item-3'><h3>" + $('#slide3 h3').html() + "</h3>" + $(
                                '#slide3 .cell1').html() + $('#slide3 .cell2').html() + $('#slide3 .cell3')
                            .html() + $(
                                '#slide3 .cell4').html() + "</div>";

                        var slide4 = "<div id='mobile-item-4'>" + $('#slide4 .description').html() + "</div>";

                        var slide5 = "<div id='mobile-item-5'>" + $('#slide5 .description').html() + "</div>";

                        var slide7 = "<div id='mobile-item-7'>" + $('#slide7 .description').html() + "</div>";

                        var slide6 =
                            "<div id='mobile-item-6'> <h3>Dla mediów</h3> <a href=\"docs/PressPack-InTheFog.pdf\"><input type=\"button\" value=\"pobierz press-pack\"></a></div>";

                        var htmlString = slide2 + slide5 + slide1 + slide3 + slide4 + slide7 + slide6;

                        $('#impress').remove();
                        $('div.impress-not-supported').remove();
                        $('.menu').remove();
                        $('.mobile-view .description').html(htmlString);
                    }
                }

                tryWidth();

                // Audio ON/OFF

                $(".on-btn").on("click", function() {
                    $('audio').trigger('pause');
                    $('#bg-audio').trigger('play');

                    $(".off-btn").removeClass("active");
                    $(this).addClass("active");
                });

                $(".off-btn").on("click", function() {
                    $('#bg-audio').trigger('pause');

                    $(".on-btn").removeClass("active");
                    $(this).addClass("active");
                });


                $(".cd-track-list li").click(function() {

                    var audio = $(this).find('audio');

                    if ($(this).hasClass('active')) {

                        $(this).removeClass('active');
                        $(this).find('audio').trigger('pause');
                        $(this)

                    } else {
                        $(".cd-track-list li").removeClass('active').find('audio').trigger('pause');
                        $(this).addClass('active');
                        $(this).find('audio').trigger('play');
                    }

                });



                // Animations

                $(".bottom").hide();
                $(".top").hide();

                $("#loader-wrapper").fadeOut(1000);
                $(".bottom").delay(800).slideDown(800, function() {});
                $(
                    ".top").delay(800).slideDown(800, function() {});
                /*  $( ".enter" ).on( "click", function() {
                      $("#loader-wrapper").fadeOut(1000);
                      $( ".bottom" ).delay( 800 ).slideDown( 800, function() {});
                      $( ".top" ).delay( 800 ).slideDown( 800, function() {});
                  });*/


                // Carousels

                $('.main-carousel').flickity({
                    // options
                    cellAlign: 'left',
                    contain: true,
                    prevNextButtons: false
                });

                $('.main-carousel-2').flickity({
                    // options
                    cellAlign: 'left',
                    contain: true,
                    pageDots: false
                });

                $('.main-carousel-3').flickity({
                    // options
                    cellAlign: 'left',
                    contain: true,
                    pageDots: false
                });



                $('.menu .panel__nav a').on('click', function() {
                    $('.menu .panel__nav a').css('font-weight', '400');
                    $(this).css('font-weight', '700');
                });

            });


            function project() {
                $('#lang_pl').attr('href', '?lang=pl/slide1')
                $('#lang_en').attr('href', '?lang=en/slide1')
            }

            function buy_cds() {
                $('#lang_pl').attr('href', '?lang=pl#/slide5')
                $('#lang_en').attr('href', '?lang=en#/slide5')
            }

            function mission() {
                $('#lang_pl').attr('href', '?lang=pl#/slide3')
                $('#lang_en').attr('href', '?lang=en#/slide3')
            }

            function music() {
                $('#lang_pl').attr('href', '?lang=pl#/slide2')
                $('#lang_en').attr('href', '?lang=en#/slide2')
            }

            function contact() {
                $('#lang_pl').attr('href', '?lang=pl#/slide4')
                $('#lang_en').attr('href', '?lang=en#/slide4')
            }
            </script>

</body>

</html>