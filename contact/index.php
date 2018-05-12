<?php include('../assets/mailer_includes/inc.config.contact.php'); ?>
<?php include('../assets/mailer_includes/inc.variables.inject.contact.php'); ?>
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

                    <!-- non-sitwide, state input validation -->
                    <script type="text/javascript" src="../assets/js/jquery.state.validate.js"></script>

            </head>

            <body>
                <?php include('../analyticstracking.php'); ?>
                    <div class="wrapper">

                        <?php include('../assets/inc/nav.php'); ?>

                            <section class="reach contact">
                                <h1 class="hero contact" style="<?php if( $_GET['status'] == 'success') { echo 'display:none';} ?>">Contact Us</h1>
                                <h1 class="hero contact" style=" display:none; margin-top:0; <?php if( $_GET['status'] == 'success') { echo 'display:inherit';} ?>">Thank You</h1>
                                <hr class="divider-fade" style="margin:20px auto 25px auto;">
                                <h2 style="line-height:1.3; 
                                 <?php if( $_GET['status'] == 'success') { echo 'display:none';} ?>">We'd love to hear from you. <br>Let us know if we can stand in prayer with you.<br><a href='mailto:&#97;&#109;&#101;&#110;&#64;&#110;&#101;&#106;&#97;&#116;&#116;&#118;&#46;&#111;&#114;&#103;'>Share your testimony: &#97;&#109;&#101;&#110;&#64;&#110;&#101;&#106;&#97;&#116;&#116;&#118;&#46;&#111;&#114;&#103;</a></h2>
                                <h2 style="line-height:1.3; display:none; margin-bottom:100px; 
                                <?php if( $_GET['status'] == 'success') { echo 'display:inherit';} ?> ">We have successfully received your contact information.<br>A prayer partner will be contacting you shortly.</h2>

                            </section>

                            <section class="container">
                                <!-- Start Page Content -->

                                <div class="crier-form">

                                    <div class="checkmark" style="display:none; margin-top:0px; margin-top: -60px; padding-left: 30px; <?php if( $_GET['status'] == 'success') { echo 'display:inherit';} ?>   ">
                                        <svg style="padding:20px 0 0 20px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" enable-background="new 0 0 161.2 161.2" xml:space="preserve">
                                            <path class="path" fill="none" stroke="#7DB0D5" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
	c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
	c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z" />
                                            <circle class="path" fill="none" stroke="#41DC9E" stroke-width="8" stroke-miterlimit="10" cx="80.6" cy="80.6" r="90" />
                                            <polyline class="path" fill="none" stroke="#41DC9E" stroke-width="15" stroke-linecap="square" stroke-miterlimit="10" points="113,52.8 
	74.1,108.4 48.2,86.4 " />

                                        </svg>

                                    </div>

                                    <form action="" id="form1" method="POST">

                                        <div class="form-wrapper" style="<?php if( $_GET['status'] == 'success') { echo 'display:none';} ?>">

                                            <div class="form-row">
                                                <input type="text" name="Name" id="Name" required minlength="3" class="contact-page <?php if (count($errors['firstname'])) { echo 'red';} ?>" placeholder="Name" value="<?php echo isset($_POST['Name']) ? $_POST['Name'] : '' ?>" />
                                            </div>
                                            <div class="form-row half left option">
                                                <input type="text" name="Address" id="Address" placeholder="Address" class="contact-page <?php if (count($errors['address'])) { echo 'red';} ?>" value="<?php echo isset($_POST['Address']) ? $_POST['Address'] : '' ?>" />
                                                <p class="optional">Optional</p>
                                            </div>
                                            <div class="form-row half right state option">
                                                <input type="text" name="State" id="State" placeholder="State" class="contact-page input-right " onchange="validateState(this);" maxlength="2" value="<?php echo isset($_POST['State']) ? $_POST['State'] : '' ?>" />
                                                <p class="optional">Optional</p>
                                            </div>
                                            <div class="form-row half right zip option">
                                                <input type="text" pattern="[0-9]*" name="Zip" id="Zip" placeholder="Zip Code" class="contact-page input-right" value="<?php echo isset($_POST['Zip']) ? $_POST['Zip'] : '' ?>" />
                                                <p class="optional">Optional</p>
                                            </div>

                                            <div class="form-row half left">
                                                <input type="email" name="Email" id="Email" placeholder="Email Address" class="contact-page input-email <?php if (count($errors['email'])) { echo 'red';} ?>" value="<?php echo isset($_POST['Email']) ? $_POST['Email'] : '' ?>" required type="email" />
                                            </div>
                                            <div class="form-row half right">
                                                <input type="tel" name="TelephoneNumber" id="TelephoneNumber" placeholder="Telephone" class="contact-page input-right" value="<?php echo isset($_POST['TelephoneNumber']) ? $_POST['TelephoneNumber'] : '' ?>" minlength="9" />
                                                <p class="optional">Optional</p>

                                            </div>

                                            <div class="radio-title" style="display:none;">
                                                <h3>Want more information?</h3></div>
                                            <div class="form-row radios">
                                                <ul class="radios" style="text-align:center; display:none;">
                                                    <li style="list-style-type:none;">
                                                        <input name="check[]" value="24/7 tv ministry" type="checkbox" class="input_class_checkbox_web">
                                                    </li>
                                                    <li style="list-style-type:none;">
                                                        <input name="check[]" value="Pastors Blog" type="checkbox" class="input_class_checkbox_design">
                                                    </li>
                                                    <li style="list-style-type:none;">
                                                        <input name="check[]" value="islam awareness" type="checkbox" class="input_class_checkbox_advertising"> </li>

                                                </ul>

                                            </div>

                                            <textarea name="More" id="More" placeholder="Anything you'd like to share?" class="input-email">
                                                <?php echo isset($_POST['More']) ? $_POST['More'] : '' ?>
                                            </textarea>

                                            <input type="hidden" name="RegisterDate" id="RegisterDate" value="<?php echo date('H:i:s M d, Y'); ?>" readonly="readonly">
                                            <div class="button-wrapper">
                                                <div class="button-wrapper-inner">

                                                    <button class="button orange" name="submit" value="Submit" type="submit">SEND MESSAGE</button>

                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                    <hr class="divider-fade" style="margin:50px auto 25px auto;">

                                    <div class="contact-model">
                                        <div style="position: relative;">
                                            <h3>P.O. Box 18555<br>Irvine, California 92603<br>tel. +1 (714) 880-8670<br><a href='mai&#108;to&#58;&#37;73%7&#53;&#112;%70o%&#55;2&#116;&#64;%&#55;2e%&#55;Aa%73&#37;6&#49;&#102;a%2E%&#54;3o%6&#68;'>Prefer email? s&#117;&#112;port&#64;rezasa&#102;a&#46;co&#109;</a></h3>

                                        </div>
                                    </div>

                                </div>
                                <!--display none -->

                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13784107.813842451!2d53.542680399858206!3d32.04639872506644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1505456124630" width="1280" height="450" frameborder="0" style="border:0; margin-bottom:-3px;" allowfullscreen></iframe>

                            </section>
                            <!-- container -->

                            <?php include('../assets/inc/footer.php'); ?>
                                <!-- /wrapper -->
                    </div>

            </body>

        </html>