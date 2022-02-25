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

        .square {
            height: 50px;
            width: 50px;
            text-align: center;
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
    border: solid 2px grey;padding:20px">
                <?php
                echo '<form action="" method="post">';
                echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
                echo '<tr><td align="center"><strong>Magic Square</strong></td></tr>';
                echo '<tr><td>Enter an odd number &nbsp;<input type=text name=number>&nbsp;';
                echo '<input type="submit" value="Generate Magic Square"></td></tr>';
                echo '</table>';
                echo '</form>';
                if (count($_POST) > 0) {
                    $number = (int)(isset($_POST['number']) ? $_POST['number'] : 3);
                    print_magicsquare($number);
                }

                function print_magicsquare($n)
                {
                    if($n%2==0){
                        echo "<br>Enter an odd number!";
                        return;
                    }

                    $magicSquare = [];
                    for ($i = 0; $i < $n; $i++)
                        for ($j = 0; $j < $n; $j++)
                            $magicSquare[$i][$j] = 0;

                    $i = (int)$n / 2;
                    $j = $n - 1;

                    for ($num = 1; $num <= $n * $n;) {

                        if ($i == -1 && $j == $n) {
                            $j = $n - 2;
                            $i = 0;
                        } else {
                            if ($j == $n)
                                $j = 0;
                            if ($i < 0)
                                $i = $n - 1;
                        }

                        if ($magicSquare[$i][$j]) {
                            $j -= 2;
                            $i++;
                            continue;
                        } else

                            $magicSquare[$i][$j] = $num++;

                        $j++;
                        $i--;
                    }
                    echo '<table border=1 style="margin:20px auto">';
                    echo '<tr>';
                    echo "<td colspan=$n>" . $n . ' x ' . $n . ' Magic Square </td>';
                    echo '</tr>';
                    for ($i = 0; $i < $n; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < $n; $j++)
                            echo '<td class="square">' . $magicSquare[$i][$j] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                }
                ?>
            </div>

        </div>
        <?PHP include 'footer.php'; ?>
</body>

</html>