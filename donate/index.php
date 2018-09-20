<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Donate and Change Lives! | TBN Nejat TV</title>

    <?php include_once('../assets/inc/configure.php'); ?>
    <?php include_once('../assets/inc/header.php'); ?>

    
   
    <!--stripe config file --> 
    <?php include_once('stripe-config.php'); ?>     
    <link rel="stylesheet" type="text/css" href="https://nejattv.org/hosted/assets/jquery.fancybox.css" media="screen" />

    <style>
        @media all and (max-width:1080px){
           .desktoper{
                display: none;
            }
            .mobiler{
                display: block !important;
                padding-top:54px ;
                padding-left:15px;
                padding-right: 15px;
                
            }
            .donation-boxes h3{
                display: block !important;
                    font-family: 'proxima-nova', sans-serif;
                    font-weight: 600;
                    text-transform: none;
                    font-size: 30px;
                    text-align: center;
                    color: white;
                    line-height: 1.2;
                padding-bottom:20px;
                
            }  
            .mobiler p{
                    font-family: 'proxima-nova', sans-serif;
                    font-size: 17px;
                    text-align: center;
                    line-height: 23px;
                    color: #333;
                    padding: 41px;
                    padding-top: 20px;
            }
            .boxes{
                padding-top: 30px
            }
/*
            #single-left,#monthly-right{
                margin-top: 150px
            }
*/
            
        }
        @media all and (max-width:640px){
            .foundering{
                margin-top: 50px
            }
        }
    </style>
</head>
<body>
    <?php include_once("../analyticstracking.php") ?>
<div class="wrapper">
	<?php include('../assets/inc/nav.php'); ?>
	 <div class="mobiler" style="display:none">
         
        
        </div>
    <section id="banner">
        <div class="donation-boxes boxes">
        <h3 style="display:none">Lives will be changed because of you.</h3>
 
        <div class="monthly-sub toggle-buttons">
            <a class="toggle-one-time active give_once">Give Once</a>
            <a class="toggle-monthly monthly">Monthly</a>
        </div><br>
        
        <!-- one time option, left --> 
        <div id="single-left" class="single-left">
            <div class="donation-indicator">
            <p>Enter an amount to give</p>
            </div>
            <div class="donation-form">
                <form action="index.php" method="post">
                    <input class="form-control donation-page" data-description="TBN Nejat TV" id="custom-donation-amount" min="1" step="10.00" type="number" value="100"> 
                    <span class="postinput donation-page">USD</span> 
                    <span class="preinput donation-page">$</span> 
                    <script src="https://checkout.stripe.com/checkout.js">
                    </script> 
                    <button class="pay-button donation-page" id="customButton">
                        <h4 class="donate-text button donation-page">DONATE</h4>
                    </button>
                </form>

        
        
			<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" id="paypal" method="post" name="paypal">
				<input name="business" type="hidden" value="amen@nejattv.org"> 
                <input name="cmd" type="hidden" value="_donations"> 
                <input name="item_name" type="hidden" value="TBN Nejat TV, Reza Safa Ministries"> 
                <input name="item_number" type="hidden" value="Contribution on website"> 
                <input id="paypal_value" name="amount" type="hidden" value="100.00"> 
                <input name="currency_code" type="hidden" value="USD">
			</form>
        
                <a href="javascript:submitForm();" target="_blank" style="cursor:pointer !important;">
                <div class="pay-button donation-page paypal" style="float:right;">
                    <h4 class="donate-text paypal">Give by <img src="../assets/img/PayPal_20.png" style="height:20px; margin: 0px 18px 0 0; padding-left:2px;"></h4>
                </div>
                </a>
                <!-- /donation-form --> 
                </div>
	    <!-- /#single-left --> 
        </div>

            
            
            
            
            
            
              <!-- monthly option, right --> 
        <div id="monthly-right" class="monthly-right" style="height:229px !important;display:none;">
           <div class="donation-indicator monthly">
            <p>Enter an amount to give <br>every month</p>
            </div>
                <div class="donation-form">
                                        <form action="index.php" method="POST">
                                            <input class="form-control donation-page" data-description="TBN Nejat TV" id="custom-donation-amount-month" min="1" step="10.00" type="number" value="100"> 
                                            <span class="postinput donation-page">USD/month</span> 
                                            <span class="preinput donation-page">$</span> 
                                           
                                            <button class="pay-button donation-page" id="customMonth">
                                                <h4 class="donate-text button donation-page">DONATE MONTHLY</h4>
                                            </button>
                                        </form>

        
        
		
                <!-- /donation-form--> 
                </div>
            
        
        <!-- /#monthly-right--> 
        </div> 
            
            
            <!-- /.donation-boxes --> 
            </div>
        <!--
        
        <div class="donation-call-to-action desktoper">
        <h3>Your donation goes to bringing the message of Jesus to the Middle East.</h3>
            <p>We raise money in other ways so that the majority of your gift goes towards funding projects that directly reach Muslims who need to hear the message of Jesus.</p>
        
        </div>

-->
        
        
        
          <div class="donation-call-to-action desktoper">
        <h3>Lives will be changed because of you.</h3>
            <p>We take accountability seriously. We work frugally and save where we can. Our promise to you is that your donation goes where it is needed most. </p>
        
        </div>
        
      
        
        
        
        
        
        
        
        
		<!-- <div id="fancy-button">
			<ul>
				<li>
					<a class="fancybox" href="#inline1">Other Ways to Give</a>
				</li>
			</ul><?php //include_once "../assets/inc/donate-inline.php"; ?>
		</div>
        --> 
	</section>
    
    
    
    
    
    
    
    
    
    
    
	<section class="founder foundering">
		<h1 class="founder" style="margin-bottom:0; padding-bottom:30px;">TBN<span style="font-weight:bold;">NEJAT</span>TV</h1>
		<p class="founder" style=" font-family:'georgia', serif; line-height:23px; font-style:italic; letter-spacing:1px;">Thank you for your donation to TBN Nejat Television<br>
		and our other ministries, Reza Safa Ministries, and TBN Middle East.</p>
		<div class="divider-satellite" style="margin-top:0; margin-bottom:30px;"></div>
		<div class="quote">
			<h2 style="padding-bottom:60px;">"God is doing a glorious work among the Muslim<br>
			people because of His Grace! We're going<br>
			after the souls of Muslims."</h2>
		</div>
	</section><!-- universal footer --><?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/footer.php'); ?><!-- /wrapper -->
</div>
   
    
    
    
    
    
  
    
     

    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript" src="fancy/source/jquery.fancybox.js"></script> 
   

    
    <script type="text/javascript">
var monthlyCharge = false;
var handler = StripeCheckout.configure({
  key: 'pk_live_1sbEFGjv90HZNcQDworFkhsk',
  image: 'assets/img/500x500.jpg',
  locale: 'auto',
    billingAddress: 'true',
  token: function(token) {
        // Use the token to create the charge with a server-side script.
        // You can access the token ID with `token.id
if(monthlyCharge == false) {
 $.post( "charge.php", { stripeToken: token.id, amount:$("#custom-donation-amount").val(), description:$("data-description").val(), stripeEmail:token.email})
           // check if it worked
          .done(function( data ) {
            console.log( "Card charged: " + data );
          });
} else {
 $.post( "charge-month.php", { stripeToken: token.id, amount:$("#custom-donation-amount-month").val(), description:$("data-description").val(), stripeEmail:token.email})
           // check if it worked
          .done(function( data ) {
            console.log( "Card charged: " + data );
          }); 
      
      }
    }
});
    </script> 
<script> 
$('#customButton').on('click', function(e) {
 monthlyCharge = false;
  // Open Checkout with further options
   var amount = $("#custom-donation-amount").val() * 100;
  handler.open({
    name: 'TBN Nejat TV',
    description: 'One Time Donation',
    amount: amount
  });
  e.preventDefault();
});
        
        
        
// Close Checkout on page navigation
$(window).on('popstate', function() {
  handler.close();
});
        </script> 
    <script> 
$('#customMonth').on('click', function(e) {
    
    monthlyCharge = true;
  // Open Checkout with further options
   var amount = $("#custom-donation-amount-month").val() * 100;
  handler.open({
    name: 'TBN Nejat TV',
    description: 'Monthly Donation',
    amount: amount
  });
  e.preventDefault();
});

// Close Checkout on page navigation
$(window).on('popstate', function() {
  handler.close();
});

</script>
    
    
    
        <script>
    $(document).ready(function(){
       $('.monthly').click(function(){
           $('.monthly-right').show();
           $('.single-left').hide();
           $('a.monthly').addClass("active");
        $('a.give_once').removeClass("active");
       }) ;
    }); 
    $(document).ready(function(){
       $('.give_once').click(function(){
           $('.monthly-right').hide();
           $('.single-left').show();
               $('a.give_once').addClass("active");
        $('a.monthly').removeClass("active");
       }) ;
    });
    </script>
    
    
    

     <script>
    $(function() {
      $('#custom-donation-amount').on('input', function(e) {
        var input = $('#custom-donation-amount').val();
        $('#paypal_value').val(input);

       
      });
    });
  </script>  
    
  
       
    
    
    <script type="text/javascript">
	$(document).ready(function() {
	$(".fancybox").fancybox({
		maxWidth	: 880,
		maxHeight	: 540,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script> 

   

<script type="text/javascript">
var temp = '';
function disableTxt() {
    var field = document.getElementById("other");
    if(field.value != '') {
        temp = field.value;
    }
    field.style.display = "none";
    field.value = '';
}
function enableTxt() {
    document.getElementById("other").style.display = "inline";
    document.getElementById("other").value = temp;
}
</script> 
<script> 
$('.close').on("click", function () {
    $(this).parents('div').fadeOut();
});
</script>
    


    
    
    
    

<!-- submit paypal function --> 
<script>
function submitForm(){
  $('#paypal').submit();
} 
    </script>
    
    

<script type="text/javascript">
   $(function() {
	$('#monthly-right').hide();
    $('a.toggle-one-time').click(function() {
        $('#single-left').show();
        $('#monthly-right').hide();
        $('a.toggle-one-time').addClass("active");
        $('a.toggle-monthly').removeClass("active");
    });
    $('a.toggle-monthly').click(function() {
        $('#monthly-right').show();
        $('#single-left').hide();
        $('a.toggle-monthly').addClass("active");
        $('a.toggle-one-time').removeClass("active");
    });
});
    </script>
    


    
    
</body>
</html>