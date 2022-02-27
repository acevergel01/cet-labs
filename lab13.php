<?php
define('NAME', 'ACE VERGEL DRAPIZA');
define('STUDENTNUMBER', '2019-037290-MN-0');
define('ADDRESS', 'Brgy Pembo, Makati City');
define('EMAILADDRESS', 'acevergeldrapiza@gmail.com');
define('CONTACTNUMBER', '09054336293');
define('WEBADDRESS', 'avmdrapiza@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 13');
define('DESCRIPTION', 'Sending Email');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LABTITLE; ?></title>

    <link rel="stylesheet" href="style.css">
</head>

<body style="
  display:flex; 
  flex-direction:column; ">
        <?PHP include 'header.php'; ?>
        <div style=" display: flex;
    flex: 1;margin-bottom:10px">

            <?PHP include 'nav.php'; ?>
            <div style="display: inline-block;
    border-radius: 5px;
    border: solid 2px grey;padding:20px;text-align:center">
                <?php
                //RETRIEVE FORM DATA IF AVAILABLE
                $from = (isset($_POST['txtFrom'])) ? $_POST['txtFrom'] : '';
                $to = (isset($_POST['txtTo'])) ? $_POST['txtTo'] : '';
                $subject = (isset($_POST['txtSubject'])) ? $_POST['txtSubject'] : '';
                $message = (isset($_POST['txtMessage'])) ? $_POST['txtMessage'] : '';
                // MAIL SETTINGS
                ini_set('sendmail_from', $from);
                ini_set('smtp_port', 25);
                ini_set('SMTP', '10.10.10.22');
                // SEND MAIL
                if (count($_POST) > 0) {
                    if (mail($to, $subject, $message))
                        echo 'Message sent';
                    else
                        echo 'Message sending failed!';
                }
                // GENERATE PHP MAIL FORM
                echo '<form class="email" method=post>';
                echo '<span>From: </span><input type="text" name="txtFrom"><br>';
                echo '<span>To: </span> <input type="text" name="txtTo"><br>';
                echo '<span>Subject: </span> <input type="text" name="txtSubject"><br>';
                echo '<span>Message: </span> <textarea name="txtMessage"></textarea><br><br>';;
                echo '<input type="submit" name="btnSend" value="Send">';
                echo '</form>';
                ?>
            </div>

        </div>
        <?PHP include 'footer.php'; ?>
</body>

</html>