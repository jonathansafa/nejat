<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php include_once('../assets/inc/configure.php'); ?>

<head>
        <meta name="robots" content="noindex" />

	<meta charset="utf-8">
	<title>404 Error | TBN Nejat TV</title>
	<meta name="description" content="Sorry, we must have made a mistake!" />
    <!-- header includes, js, css - sitewide --> 
    <?php include('../assets/inc/header.php'); ?>
    
    

</head>
<body>
    <?php include('../analyticstracking.php'); ?>
    <div class="wrapper">
        
         <?php include('../assets/inc/nav.php'); ?>
        
        
        <section class="reach fourohfour">
            <h1 class="hero">Oops!</h1>
            <h2>404 Error</h2>
            <div class="divider-satellite" style="margin-bottom:30px;"></div>

            <div class="mission-statement" style="    margin-bottom: 50px;">
            <h2>Sorry, we must have made a mistake. <br>That page does not exist. </h2>
            </div>
             <a href="<?php echo (BASE_URL); ?>" class="pledge-button" style="margin-bottom:20px;">Return to Homepage</a>
            
          
        </section>
       
        <?php include('../assets/inc/footer.php'); ?>
    <!-- /wrapper --> 
    </div>
    
        

    
</body>

</html>


