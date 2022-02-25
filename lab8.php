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

                $text = (isset($_POST['text'])) ? $_POST['text'] : '';
                echo '<form method="post">';
                echo 'Enter text:<br />';
                echo '<textarea name="text" style="width:500px">';
                echo $text;
                echo '</textarea><br />';
                echo '<input type=submit value="Process">&nbsp;';
                echo '<input type=reset>&nbsp;';
                echo '</form>';
                $text = preg_replace('/[^a-zA-Z0-9 ]/', '', trim($text));

                $colors[] = '#00CCFF';
                // No 1. Add at least 10 color values to array $colors
                $colors[0] = '#000000';
                $colors[1] = '#FF0000';
                $colors[2] = '#FFA500';
                $colors[3] = '#FFFF00';
                $colors[4] = '#00FF00';
                $colors[5] = '#0000FF';
                $colors[6] = '#4B0082';
                $colors[7] = '#8F00FF';
                $colors[8] = '#964B00';
                $colors[9] = '#FFFFFF';

                if ($text <> '') {
                    // No. 2. Convert the $text to lowercase and assign to $text
                    $text = strtolower($text);

                    // No. 3. Explode $text into array andassign to $allwords
                    $allwords = explode(' ', $text);

                    // No. 4. Remove duplicate items and assign to $uniquewordlist
                    $uniquewordlist = array_unique($allwords);

                    // No. 5. sort the array $uniquewordlist
                    sort($uniquewordlist);

                    // No. 6. Check thefirst element of $uniquewordlist if equal to space
                    if ($uniquewordlist == '') {
                        // No. 7. Remove the first element from $uniquewordlist
                        $deleteditem = array_shift($uniquewordlist);
                    }

                    foreach ($uniquewordlist as $word)
                        $counter[$word] = 0;

                    $totalwords = 0;
                    foreach ($allwords as $word) {
                        if ($word != '') {
                            $counter[$word]++;
                            $totalwords++;
                        }
                    }

                    echo '<table border=1 style="width:500px">';
                    echo '<tr><td colspan=4 align=center>Array Manipulation -Word Counter</td></tr>';
                    echo '<tr><td>No.</td><td>Word</td><td>Frequency</td><td>Percent</td></tr>';
                    $i = 1;
                    foreach ($uniquewordlist as $word) {
                        // No. 8. Get the current element of array $colors (IAP function)
                        $color = current($colors);

                        $length = number_format($counter[$word] / $totalwords * 100.00, 2);
                        echo '<tr>';
                        echo '<td>', $i, '.</td>';
                        echo '<td>', $word, '</td>';
                        echo '<td>', $counter[$word], '</td>';
                        echo '<td style="background:', $color, '">', $length, '%</td>';
                        echo '</tr>';

                        // No. 9. Move the internal array pointer of $colors to next element
                        next($colors);

                        if (current($colors) == false) {
                            // No. 10. Reset internal array pointer of $colors
                            reset($colors);
                        }
                        $i++;
                    }
                    echo '</table>';
                }
                ?>
            </div>

        </div>
        <?PHP include 'footer.php'; ?>
</body>

</html>