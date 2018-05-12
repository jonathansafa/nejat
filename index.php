<?php
@ob_start();
session_start();
?>
<!doctype html>
    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
    <!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <html class="no-js" lang="en">
    <!--<![endif]-->

    <?php include_once('assets/inc/lang.php'); ?>

        <head>
            <title>Winning Muslims in Iran for Christ! | TBN Nejat TV</title>

            <meta property="og:title" content="Winning Muslims in Iran for Christ! | TBN Nejat TV" />
            <meta property="og:image" content="https://nejattv.org/assets/img/behzad-facebook-tbn-nejat-tv.jpg" />
            <meta property="og:type" content="website" />
            <meta property="fb:app_id" content="711889698994833" />
            <meta property="og:url" content="https://nejattv.org/" />
            <meta property="og:site_name" content="TBN Nejat TV" />
            <meta property="og:description" content="Discover how TBN Nejat TV is becoming a leading voice of Christianity in Iran and Afghanistan." />
            <meta name="description" content="TBN Nejat TV is converting Muslims to Christ in Iran through TV." />

            <link rel="icon" href="https://rezasafa.com/favicon.ico?v=2" />

            <?php include_once("assets/inc/inc.facebook.php") ?>
                <!-- remove comment after testing     -->
                <?php include_once('assets/mailer_includes/inc.variables.inject.php'); ?>

                    <?php include_once('assets/inc/configure.php'); ?>
                        <?php include_once('assets/inc/header.php'); ?>

        </head>

        <body>
            <?php include_once("analyticstracking.php") ?>
                <div class="wrapper">
                    <!-- universal nav -->
                    <?php include_once('assets/inc/nav.php'); ?>

                        <div class="hero_one">
                            <ul class="language">
                                <li>
                                    <ul>
                                        <?php echo $lang['LANGUAGE_MENU']; ?>

                                    </ul>

                                </li>

                            </ul>

                            <style>
                                iframe#twitter-widget-0 {
                                    margin-right: 201px;
                                    padding-top: 0px;
                                    display: inline-table;
                                    vertical-align: top;
                                }
                            </style>
                            <div class="hero_one_text">
                                <?php echo $lang['HERO_ONE_TEXT']; ?>
                                    <?php echo $lang['HERO_THREE_TEXT']; ?>

                                        <!--      
            <a href="/watch/">
                    <button class="watch home" name="submit" value="Submit" type="Submit">
                        <?php echo $lang['watch_live_span']; ?>
                    </button>
                </a>
                <br>

                <a href="/about/breaking/">
                    <button name="submit" value="Submit" type="Submit">
                        <?php echo $lang['read_more']; ?>
                    </button>
                </a><br> -->
                                        <a href="/donate/">
                                            <button name="submit" value="Submit" type="Submit">
                                                <?php echo $lang['donate_span']; ?>
                                            </button>
                                        </a>
                                
                                <!-- social homepage -->
                                <?php // include('assets/inc/social.home.php'); ?>
                                
                                <!-- / hero_one_text / -->
                            </div>

                            <?php // include_once($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/inc.donate.form.php'); ?>

                                <div class="caption">
                                    <p>Screengrab from Pastor Reza's latest film about Iranian refugees, A Faceless Faith.</p>
                                    <!--<p>An Iranian woman joins the demonstrations in Tehran, Iran. Nearly 25 people have been killed in the protests so far.</p>-->

                                </div>
                        </div>

                        <div class="email_submission">
                            <div class="email_submission_form">
                                <?php include('assets/mailer_includes/inc.form.php'); ?>

                            </div>
                        </div>

                        <div class="hero_videos">
                            <div class="hero_videos_box">
                                <a data-fancybox href="https://youtu.be/jzNPitqQ7Gw?rel=0&cc_load_policy=1">
                                    <div class="play_video"> <img src="assets/img/behzad.jpg" />
                                        <div class="see_more grey" style="border-color:#333;color:#333; padding-right:35px; padding-left:35px;">Ministry Update</div>
                                    </div>
                                </a>
                                <div class="right">
                                    <?php echo $lang['our_tv_ministry']; ?>
                                        <?php echo $lang['broadcast_pitch']; ?>
                                            <a target="_blank" href="https://www.youtube.com/user/rezasafaministries">
                                                <?php echo $lang['see_more_videos']; ?>
                                            </a>
                                </div>

                            </div>

                        </div>

                        <div class="gospel-line">
                            <p>
                                <?php echo $lang['gospel_line']; ?>
                                    <br>
                                    <?php echo $lang['gospel_line_two']; ?>
                            </p>
                        </div>

                        <div class="hero_sponsor">
                            <?php echo $lang['2017_vision']; ?>

                        </div>

                        <div class="sponsor_program">
                            <div class="sponsor_div">
                                <h4 class="caroline">Film Nights</h4>
                                <p>
                                    <?php echo $lang['film']; ?>
                                        <br>
                                        <br>
                                        <span style="color:#F7C62E;font-size:40px;font-weight:500">$100</span>
                                        <span style="font-weight:500;padding-left:0px;">/film</span></p>

                            </div>
                            <div class="sponsor_div case">
                                <img style="margin-left: 0;float: left;padding-top: 86px;" src="assets/img/chevron_right.png" />

                            </div>

                        </div>

                        <div class="sponsor_program">
                            <div class="sponsor_div hillsong">
                                <img style="margin-left: 0;float: right;padding-top: 86px;" src="assets/img/chevron_left.png" />

                            </div>
                            <div class="sponsor_div">
                                <h4 class="brian">Brian Houston TV</h4>
                                <p>
                                    <?php echo $lang['brian_houston']; ?>

                                        <br>
                                        <br><span style="color:#F7C62E;font-size:40px;font-weight:500">$50</span><span style="font-weight:500;padding-left:3px;">/program</span></p>

                            </div>

                        </div>

                        <div class="hero_numbers">
                            <div class="number">
                                <h4><?php echo $lang['77'];?><?php echo $lang['million'];?></h4>
                                <?php echo $lang['million_text'];?>
                            </div>
                            <div class="number">
                                <h4><?php echo $lang['3'];?><?php echo $lang['nations'];?></h4>
                                <?php echo $lang['nations_text'];?>
                            </div>
                            <div class="number">
                                <h4 style="letter-spacing:-3px; margin-left:-5px;"><?php echo $lang['24'];?><?php echo $lang['hours'];?></h4>
                                <?php echo $lang['hours_text'];?>
                            </div>
                            <div class="number">
                                <h4><?php echo $lang['100'];?><span style="font-size:40px; padding-left:5px;vertical-align:middle;">+</span></h4>
                                <?php echo $lang['underground'];?>
                            </div>

                        </div>

                        <div class="divider-non-satellite" id="nejat">
                        </div>
                        <div class="nejat_hero">
                            <h1 class="hero nejat">TBN Nejat TV</h1>
                            <p class="countries">
                                <?php echo $lang['nejat_italic'];?>
                                    <br>
                                    <br>
                                    <?php echo $lang['nejat_broadcast'];?>
                            </p>

                            <a href="/watch/">
                                <?php echo $lang['nejat_watch'];?>
                            </a>

                            <div class="caption">
                                <?php echo $lang['nejat_watch_caption'];?>
                            </div>

                        </div>

                        <section class="reach home">
                            <h1 class="hero"><?php echo $lang['section_broadcast'];?></h1>
                            <p class="countries">
                                <?php echo $lang['section_broadcast_text'];?>
                            </p>
                        </section>

                        <section class="countries home">
                            <div class="tooltip tooltip-iran grid grid-1 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-saudi grid grid-2 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-israel grid grid-3 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-turkey grid grid-4 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-afghanistan grid grid-5 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-sweden grid grid-6 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-tajikistan grid grid-7 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-uae grid grid-8 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-iraq grid grid-9 pin-location ">
                                <a href="#"></a>
                            </div>
                            <div class="tooltip tooltip-uk grid grid-10 pin-location ">
                                <a href="#"></a>
                            </div>

                        </section>
                        <div class="country">
                            <a href="/reach/countries/">
                                <?php echo $lang['section_broadcast_visit'];?>
                            </a>
                        </div>

                        <!-- universal footer -->
                        <?php include_once('assets/inc/footer.php'); ?>

                            <!-- /wrapper -->
                </div>
                <!-- email submission css styling after completion -->
                <?php if ( isset( $cssinclude ) ) {  echo $cssinclude; } ?>

                    <!--delaying the countries icons -->
                    <script type="text/javascript">
                        $(window).scroll(function() {
                            $('.countries').each(function() {
                                var imagePos = $(this).offset().top;
                                var imageHeight = $(this).height();
                                var topOfWindow = $(window).scrollTop();

                                if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
                                    $(this).addClass("delay-home");
                                } else {
                                    $(this).removeClass("delay-home");
                                }
                            });
                        });
                    </script>
                    <!-- delay facebook icons until pageload -->
                    <script type="text/javascript">
                        $(window).load(function() {
                            // this will ensure that all content has loaded before the div is shown
                            $(".load").show();
                        });
                    </script>
            
            
                    <!-- Hello newsletter banner ad -->
                    <script src="https://my.hellobar.com/fb7cce086373f610f528d4173e5f22c5fbac53c3.js" type="text/javascript" charset="utf-8" async="async"></script>
        </body>

    </html>