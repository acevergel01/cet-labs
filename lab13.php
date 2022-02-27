<?php
define('NAME', 'ACE VERGEL DRAPIZA');
define('STUDENTNUMBER', '2019-037290-MN-0');
define('ADDRESS', 'Brgy Pembo, Makati City');
define('EMAILADDRESS', 'acevergeldrapiza@gmail.com');
define('CONTACTNUMBER', '09054336293');
define('WEBADDRESS', 'avmdrapiza@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 1');
define('DESCRIPTION', 'Hello World');
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

        span {
            display: inline-block;
            min-width: 65px;
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
                echo '<form method=post>';
                echo '<span>From: </span><input type="text" name="txtFrom"><br>';
                echo '<span>To: </span> <input type="text" name="txtTo"><br>';
                echo '<span>Subject: </span> <input type="text" name="txtSubject"><br>';
                echo '<span>Message: </span> <textarea name="txtMessage"></textarea><br><br>';;
                echo '<input type="submit" name="btnSend" value="Send">';
                // ITEM 4: Generate a textbox txtFrom
                // ITEM 5: Generate a textbox txtTo
                // ITEM 6: Generate a textbox txtSubject
                // ITEM 7: Generate a textarea txtMessage
                // ITEM 8: Generate a submit button btnSend
                echo '</form>';
                ?>
            </div>

        </div>
        <?PHP include 'footer.php'; ?>
</body>

</html>