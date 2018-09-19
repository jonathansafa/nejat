<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php include_once('../assets/inc/configure.php'); ?>

    <head>
        <meta charset="utf-8">
        <title>Watch Live | TBN Nejat TV</title>
        <meta property="og:title" content="A Mission to Save Iran! | TBN Nejat TV" />
        <meta property="og:image" content="https://nejattv.org/assets/img/behzad-facebook-tbn-nejat-tv.jpg" />
        <meta property="og:type" content="website" />
        <meta property="fb:app_id" content="711889698994833" />
        <meta property="og:url" content="https://nejattv.org/watch/" />
        <meta property="og:site_name" content="TBN Nejat TV" />
        <meta property="og:description" content="TBN Nejat TV is beaming the message of Jesus into Iran this very moment. Watch live!" />
        <meta name="description" content="TBN Nejat TV is beaming the message of Jesus into Iran this very moment. Watch live!" />

        <!-- header includes, js, css - sitewide -->
        <?php include('../assets/inc/header.php'); ?>
            <!-- / facebook plugin  / -->
            <?php 
        
  //  $_SERVER['DOCUMENT_ROOT'] . '/negat/assets/inc/facebook-plugin.php';
        
       // include($_SERVER['DOCUMENT_ROOT'] . '/negat/assets/inc/facebook-plugin.php'); ?>
          <?php include('../assets/inc/facebook-plugin.php'); ?>

    </head>
    <body>
        <?php include('../analyticstracking.php'); ?>

            <div class="wrapper nejat">

                <?php include('../assets/inc/nav.php'); ?>

                    <section class="reach watch">
                        <h1 class="hero">Watch TBN Nejat TV Live</h1>

                        <p class="countries watch"><span style="font-style:italic;">Nejat means "Salvation" in Farsi (Persian).</span>
                            <br>
                            <br>The first all-Christian Farsi TV Broadcast into the Middle East.
                            <br>Primarily reaching <span style="font-weight:bold;">Iran</span>, <span style="font-weight:bold;">Afghanistan</span> and <span style="font-weight:bold;">Tajikistan</span>
                            <br>with the life-changing message of Jesus Christ. </p>

                        <div class="nejat-watch" style="position:relative; width:640px;margin:auto;">
                           
<iframe id="ls_embed_1530539430" src="https://livestream.com/accounts/27460990/events/8266913/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe><script type="text/javascript" data-embed_id="ls_embed_1530539430" src="https://livestream.com/assets/plugins/referrer_tracking.js"></script>
                            
                            
                            <div style="float:left; margin:10px 0 60px 0;" class="fb-like" data-href="https://nejattv.org/watch/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        </div>

                        <div class="clear"></div>
                        <div class="mission-statement new_mission" style="margin-bottom: 50px;">

                            <a href="<?php echo (BASE_URL) . 'about/mission/'; ?>" class="pledge-button button_drop" style="margin-bottom:20px;">See Our Vision</a>
                        </div>

                    </section>

                    <?php include('../assets/inc/footer.php'); ?>
                        <!-- /wrapper -->
            </div>

    </body>

</html>