<?php //include('../assets/mailer_includes/inc.config.contact.php');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ?>
<?php //include('../assets/mailer_includes/inc.variables.inject.contact.php');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ?>
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
        <title>Contact Our Office | TBN Nejat TV</title>
        <meta name="description" content="Use our contact form to be in touch." />
        <!-- header includes, js, css - sitewide -->
        <?php include('../assets/inc/header.php'); ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/styles.css">

    </head>

    <body>
        <?php include('../analyticstracking.php'); ?>
        <div id="solution">

            <?php include('../assets/inc/nav.php'); ?>

            <section class="reach contact">
                <h1 class="text-hero contact text-capital">The Turkey Solution</h1>
                <div class="sub-header">
                    <h2 class="sub-header-line">Last year, 600 Christians in Iran were arbitarily arrested - </h2>
                    <h2 class="sub-header-bold">simply because their faith was in Jesus.</h2>
                </div>
                <div class="sub-header">
                    <h2 class="sub-header-line">Christians are fleeing Iran for Turkey because of persecution, </h2>
                    <h2>and for fear of prosecution and possibly torture.</h2>
                </div>
                <div class="sub-header">
                    <h2 class="sub-header-line">We're <span class="sub-header-bold">planting churches</span> to harbor these refugees</h2>
                    <h2>and establishing a <span class="sub-header-bold">community of believers</span> during their time of transition.</h2>
                </div>
            </section>

            <div class="hero_videos" id="video_rank">
                <div class="hero_videos_box">
                    <a data-fancybox="" href="https://www.youtube.com/watch?v=jzNPitqQ7Gw">
                        <div class="play_video"> <img src="img/video.png">
                        </div>
                    </a>
                    <?php
                    require_once './DBConfig.php';
                    $dbConfig = new DBConfig();
                    $result = $dbConfig->executeQuery("SELECT * FROM fund WHERE FUND_ID = 1");
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $raised_fund = $row['RAISED_FUND'];
                        $max_fund = $row['TOTAL_FUND'];
                        $per = (($raised_fund * 100) / $max_fund);
                    }
                    ?>
                    <div class="right">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $per ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $per ?>%">
                            </div>
                        </div>
                        <h2 class="raised-fund">$<?= number_format($raised_fund, 0) ?></h2>                                        
                        <h3 class="goal-fund">raised of $<?= number_format($max_fund, 0) ?> goal</h3>                                        
                        <a class="take-action" target="_blank" href="https://www.youtube.com/user/rezasafaministries">Take Action</a>
                        <div class="social-links"> 
                            <a class="share-this" target="_blank" href=""><i class="fa fa-envelope"></i> Share this page</a>
                            <a class="share-icon" target="_blank" href=""><i class="fa fa-facebook-official"></i></a>
                            <a class="share-icon" target="_blank" href=""><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <section class="img-we-can-help">
                <img src="img/top-brush.png" alt="top brush"/>
            </section>
            <section class="reach contact we-can-help">
                <h2>Iranians are fleeing to Turkey.</h2>
                <h2>There are very few churches.</h2>
                <h2 class="last-h2">We can help.</h2>
            </section>
            <section class="img-we-can-help">
                <img src="img/bottom-brush.png" alt="bottom brush"/>
            </section>

            <section id="next-step">
                <div>
                    <h2 class="next-header">Our Next Steps in Turkey</h2>
                    <h2 class="next-sub-header">The next steps for our work in Turkey for the rest of 2018</h2>
                </div>
            </section>

            <section class="steps-main" id="step-flag">
                <div class="step-main-1">
                    <img class="mobile-view flag-img visible-hidden" src="img/flag-mobile.jpg" alt="flag"/>
                    <img class="desk-view flag-img visible-hidden" src="img/flag.jpg" alt="flag"/>
                    <div class="div-left">
                        <img src="img/step1.png"/>
                        <div class="div-left-text">
                            <h2>TBN Nejat TV will visit</h2>
                            <h2>5 different cities in Turkey.</h2>
                            <p>The most important thing we can do for the new <br/>
                                Iranian Believers in Turkey, is to find them a host <br/>
                                pastor. Connecting them with local pastors is <br/>
                                essential for their spiritual health.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="steps-main">
                <div class="step-main-2">
                    <img class="mobile-view flag-img visible-hidden" src="img/refugee-mobile.jpg" alt="flag"/>
                    <img class="desk-view flag-img visible-hidden" src="img/refugee.jpg" alt="flag"/>
                    <div class="div-right">
                        <img src="img/step2.png"/>
                        <div class="div-right-text">
                            <h2>Vetting potential pastors and</h2>
                            <h2>church leaders.</h2>
                            <p>Probably the most important part of our travels is to <br/>
                                vet pastors and leaders to whom we will soon <br/>
                                entrust a local church plant.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="steps-main">
                <div class=" step-main-3">
                    <img class="mobile-view flag-img visible-hidden" src="img/bike-mobile.jpg" alt="flag"/>
                    <img class="desk-view flag-img visible-hidden" src="img/bike.jpg" alt="flag"/>
                    <div class="div-right step-3">
                        <img src="img/step3.png"/>
                        <div class="div-right-text">
                            <h2>Sponsoring local pastors</h2>
                            <h2>to plant churches in Turkey.</h2>
                            <p>Every month, we financially support local pastors in <br/>
                                Turkey who oversee Iranian refugees</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="steps-main step-4">
                <div class="div-center">
                    <img src="img/step4.png"/>
                    <div class="div-center-text">
                        <h2>Beginning:</h2>
                        <h2>Building a local Bible School.</h2>
                        <div>
                            <p class="col-50 float-left">
                                Lastly, these communities of precious <br/>
                                Iranian believers need a space to meet<br/>
                                with other believers on Sundays. often<br/>
                                times, we rent space that are nothing<br/>
                                more than a vacant.
                            </p>
                            <p class="col-50 float-right">
                                Lastly, these communities of precious <br/>
                                Iranian believers need a space to meet<br/>
                                with other believers on Sundays. often<br/>
                                times, we rent space that are nothing<br/>
                                more than a vacant.
                            </p>

                        </div>
                    </div>
                </div>
                <img class="flag-img" src="img/bottom image.png" alt="flag"/>
            </section>
            <?php include('../assets/inc/footer.php'); ?>
            <!-- /wrapper -->
        </div>

    </body>

</html>