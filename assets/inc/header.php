<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta name="author" content="TBN Nejat TV">
<meta name="keywords" content="TBN, Nejat, Farsi TV, Christian Satellite, Christian Satellite television, farsi television, persian christians, persecuted christians, iran christianity"/>

<!-- always have the latest jquery, of course --> 
<script src="https://code.jquery.com/jquery-latest.min.js"></script> 

<!-- jquery validate for form --> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script> 

<!-- favicon of satellite --> 
<link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/img/favicon.ico" type="image/x-icon" />

<script> 
$(document).ready(function () {
    $('#form1').validate({ // initialize the plugin
    });
});
</script>

    
    

 <!-- fancy box --> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script>
$('[data-fancybox]').fancybox({
  toolbar  : false, 
    infobar : false
})
</script> 



<!-- CCS globals -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/reset.css" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/nav.css" />
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/responsive.css" />

<!--fonts--> 
<script src="https://use.typekit.net/cfi7xnj.js"></script>
<script>try{Typekit.load({ async: false });}catch(e){}</script>   
<link href='https://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Old+Standard+TT:400italic,700' rel='stylesheet' type='text/css'>

<!-- / php parsing pages to make buttons white or black on nav.php / --> 
<?php
$darkscheme = '/about/founder/';
$breaking = '/about/breaking/iran-deal/';
$donate = '/donate/';
$options = array(
    '/',
    '/~jonathan/www/rezasafa.com/index.php',
    '/index.php',
    '/?lang=en', 
    '/?lang=fa',
    '/?lang=sv',
    '/about/founder/', 
    '/about/breaking/iran-deal/'
);
?>


