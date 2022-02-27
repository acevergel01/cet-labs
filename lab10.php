<?php
define('NAME', 'ACE VERGEL DRAPIZA');
define('STUDENTNUMBER', '2019-037290-MN-0');
define('ADDRESS', 'Brgy Pembo, Makati City');
define('EMAILADDRESS', 'acevergeldrapiza@gmail.com');
define('CONTACTNUMBER', '09054336293');
define('WEBADDRESS', 'avmdrapiza@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 10');
define('DESCRIPTION', 'Handling User Input - Dynamic Page')
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
                $links['lab10_home.php'] = 'Home';
                $links['lab10_vision.php'] = 'Vision';
                $links['lab10_mission.php'] = 'Mission';
                $links['lab10_history.php'] = 'History';
                echo '<table width=100% border=1>';
                // navigation section
                echo '<tr><td>';
                foreach ($links as $key => $value)
                    echo '&nbsp;<a href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
                echo '</td></tr>';
                // dynamic content
                echo '<tr><td><br />';
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if (is_readable($page))
                        include_once($page);
                    else
                        echo 'File <strong>', $page, '</strong> not found!';
                } else {
                    reset($links);
                    include_once(key($links));
                }
                echo '<br /><br />';
                echo '</td></tr>';
                echo '</table>';
                ?>
            </div>

        </div>
        <?PHP include 'footer.php'; ?>
</body>

</html>