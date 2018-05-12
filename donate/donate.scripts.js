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
            if (monthlyCharge == false) {
                $.post("charge.php", {
                        stripeToken: token.id,
                        amount: $("#custom-donation-amount").val(),
                        description: $("data-description").val(),
                        stripeEmail: token.email
                    })
                    // check if it worked
                    .done(function(data) {
                        console.log("Card charged: " + data);
                    });
            } else {
                $.post("charge-month.php", {
                        stripeToken: token.id,
                        amount: $("#custom-donation-amount-month").val(),
                        description: $("data-description").val(),
                        stripeEmail: token.email
                    })
                    // check if it worked
                    .done(function(data) {
                        console.log("Card charged: " + data);
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
            maxWidth: 880,
            maxHeight: 540,
            fitToView: false,
            width: '70%',
            height: '70%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });
    });
</script>



<script type="text/javascript">
    var temp = '';

    function disableTxt() {
        var field = document.getElementById("other");
        if (field.value != '') {
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
    $('.close').on("click", function() {
        $(this).parents('div').fadeOut();
    });
</script>





<!-- submit paypal function -->
<script>
    function submitForm() {
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