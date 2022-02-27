<?php

define('NAME', 'ACE VERGEL DRAPIZA');
define('STUDENTNUMBER', '2019-037290-MN-0');
define('ADDRESS', 'Brgy Pembo, Makati City');
define('EMAILADDRESS', 'acevergeldrapiza@gmail.com');
define('CONTACTNUMBER', '09054336293');
define('WEBADDRESS', 'avmdrapiza@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 12');
define('DESCRIPTION', 'Managing State Information Using Cookies - Login Page');

?>
<?php
session_start();
if (isset($_POST['username'])) {
    if (isset($_POST['rememberme']))
        setcookie('username', $_POST['username'], time() + 60 * 60);
    else
        setcookie('username', '', time() - 60 * 60);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LABTITLE; ?></title>
    <style>
        html {
            height: 95vh;
        }

        header {
            margin: 20px;
        }

        body {
            height: 100%;
        }

        header h3,
        h1 {
            margin: 0;
        }

        .nav {
            border-radius: 5px;
            border: solid 2px grey;
            display: inline-block;
            width: 20%;
            height: 100%;
            margin-right: 20px;
        }
    </style>
</head>

<body style="
  display:flex; 
  flex-direction:column; ">
    <header style="margin: 20px;">

        <?PHP include 'header.php'; ?>
        <div style=" display: flex;
    flex: 1;margin-bottom:10px">

            <?PHP include 'nav.php'; ?>
            <div style="display: inline-block;
    border-radius: 5px;
    border: solid 2px grey;padding:20px;text-align:center">

                <?php
                echo '<form method="post">';
                if (isset($_POST['login']) > 0) // login button is clicked
                    process_form();
                elseif (isset($_POST['logout'])) // logout button is clicked
                    process_logout();
                elseif (isset($_SESSION['username'])) // check if user is logged in
                    generate_welcomepage();
                else
                    generate_loginform(); // display login form
                echo '</form>';


                function generate_loginform()
                {
                    if (isset($_COOKIE['username']))
                        $username = $_COOKIE['username'];
                    else
                        $username = '';
                    echo '<input type="text" name="username" value="', $username, '">';
                    echo '<input type="password" name="password"><br>';
                    echo '<input type="checkbox" name="rememberme" checked=checked> Remember 
me on this computer<br><br> ';
                    echo '<input type="submit" name="login" value="Login">';
                }
                function process_form()
                {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if ((trim($username) != '') && ($password == '12345')) {
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
                        generate_welcomepage();
                    } else {
                        generate_loginerror();
                        generate_loginform();
                    }
                }
                function generate_loginerror()
                {
                    echo "<strong>Login Failed!</strong><br>";
                }
                function process_logout()
                {
                    if (isset($_SESSION['username']))
                        echo '<strong>Logout Successful</strong><br>';
                    session_destroy();
                    generate_loginform();
                }
                function generate_welcomepage()
                {
                    $username = $_SESSION['username'];
                    echo "Welcome back $username! <br><br>";
                    echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et magna nisl, 
                    quis consectetur ante. Aliquam nec augue magna. Quisque mi massa, lacinia quis 
                    feugiat id, posuere id erat. Morbi a eros turpis, eget scelerisque sapien. Nunc 
                    pellentesque, augue sed tristique gravida, nisl augue dictum nisi, at laoreet ante 
                    turpis non dolor. Maecenas tristique tristique nisl, tristique posuere mi porttitor eu. 
                    Pellentesque interdum, odio id scelerisque sodales, orci augue scelerisque tortor, id 
                    ornare leo quam non eros. Donec tincidunt vulputate libero convallis auctor. Morbi 
                    ullamcorper interdum metus, sed euismod dolor ullamcorper et.<br><br>";

                    echo '<input type="submit" name="logout" value="Logout">';
                }
                ?>
            </div>

        </div>
        <?PHP include 'footer.php'; ?>
</body>

</html>