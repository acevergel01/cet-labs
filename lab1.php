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
    border: solid 2px grey;width:100%;padding:20px">
            <?php
            echo "Hello world";
            echo "<br>";
            echo "The date today is " . date("m/d/y")
            ?>
        </div>

    </div>

    <?PHP include 'footer.php'; ?>
</body>

</html>