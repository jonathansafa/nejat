
<?php
$error = $raised_fund = $max_fund = "";
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
}

if (!isset($_SESSION['USER_NAME'])) {
    header('Location: index.php');
}

function format_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require_once './DBConfig.php';
$dbConfig = new DBConfig();
$result = $dbConfig->executeQuery("SELECT * FROM fund WHERE FUND_ID = 1");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    //FUND_ID, TOTAL_FUND, RAISED_FUND, UPDATED_DATE, FUND_ID, id
    $raised_fund = $row['RAISED_FUND'];
    $max_fund = $row['TOTAL_FUND'];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $raised_fund = format_input($_POST["raised_fund"]);
    $max_fund = format_input($_POST["max_fund"]);
    if ($max_fund >= $raised_fund) {
        $result = $dbConfig->executeQuery("UPDATE `fund` SET `TOTAL_FUND`='$max_fund', `RAISED_FUND`='$raised_fund' WHERE `FUND_ID`='1'");
    } else {
        $error = "Total fund should not less than Raised fund.";
    }
}
?>


<?php //include('../assets/mailer_includes/inc.config.contact.php');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ?>
<?php //include('../assets/mailer_includes/inc.variables.inject.contact.php');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ?>
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
        <style>

            form {
                margin-top: 131px;
                max-width: 400px;
            }

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            img.avatar {
                width: 150px;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
            .error{
                padding: 10px;
                color: #FF0000;
                font-weight: bold;
            }
            .lable-p{
                text-align: left;
                font-weight: 700;
                font-size: 16px;
                line-height: 10px;
                padding-top: 20px;
            }
        </style>
        <script>
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
        </script>
    </head>

    <body>
        <?php include('../analyticstracking.php'); ?>
        <div>
            <?php include('../assets/inc/nav.php'); ?>
            <div align="center"> 
                <form action="" method="post" action='<?php echo $_SERVER["PHP_SELF"]; ?>'>
                    <div class="imgcontainer">
                        <h1>Update Fund Data</h1>
                    </div>

                    <div class="container">
                        <?php
                        if ($error != '') {
                            ?>
                            <div class="error"><?= $error ?></div>
                            <?php
                        }
                        ?>
                        <p class="lable-p" for="max_fund"><b>Total Fund</b></p>
                        <input type="text" placeholder="Enter Total Fund Value" name="max_fund" id="max_fund" maxlength="11" required onkeypress="return isNumber(event)" value="<?= $max_fund ?>">
                        <p class="lable-p" for="raised_fund"><b>Raised Fund</b></p>
                        <input type="text" placeholder="Enter Raised Fund Value" name="raised_fund" id="raised_fund" maxlength="11" required onkeypress="return isNumber(event)"  value="<?= $raised_fund ?>">
                        <button type="submit">Update</button>

                        <button type="submit" name="logout" class="cancelbtn">Logout</button>
                    </div>
                </form>
            </div>
            <?php include('../assets/inc/footer.php');
            ?>
            <!-- /wrapper -->
        </div>

    </body>

</html>