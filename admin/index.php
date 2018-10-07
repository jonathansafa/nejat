
<?php
$error = $username = $password = "";
session_start();

if (isset($_SESSION['USER_NAME'])) {
    header('Location: form.php');
}

function format_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once './DBConfig.php';
    $dbConfig = new DBConfig();
    $username = format_input($_POST["username"]);
    $password = format_input($_POST["password"]);


    $result = $dbConfig->executeQuery("SELECT * FROM user WHERE USERNAME = '$username' AND PASSWORD = '$password'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['USER_NAME'] = $username;
        header('Location: form.php');
    } else {
        $error = "Invaid login. Please provide valida credential.";
    }
}
?>

<?php //include('../assets/mailer_includes/inc.config.contact.php');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ?>
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
        </style>
    </head>

    <body>
        <?php include('../analyticstracking.php'); ?>
        <div>
            <?php include('../assets/inc/nav.php'); ?>
            <div align="center"> 
                <form action="" method="post" action='<?php echo $_SERVER["PHP_SELF"]; ?>'>
                    <div class="imgcontainer">
                        <!--<i class="fa fa-user" style="font-size:48px"></i>-->
                        <img src="img/img_avatar2.png" alt="User" class="avatar">
                    </div>

                    <div class="container">
                        <?php
                        if ($error != '') {
                            ?>
                            <div class="error"><?= $error ?></div>
                            <?php
                        }
                        ?>
                        <input type = "text" placeholder = "Enter Username" name = "username" id = "usename" required>
                        <input type = "password" placeholder = "Enter Password" name = "password" id = "password" required>
                        <button type = "submit">Login</button>
                    </div>
                </form>
            </div>
            <?php include('../assets/inc/footer.php');
            ?>
            <!-- /wrapper -->
        </div>

    </body>

</html>