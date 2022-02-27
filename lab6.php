<?php
define('NAME', 'ACE VERGEL DRAPIZA');
define('STUDENTNUMBER', '2019-037290-MN-0');
define('ADDRESS', 'Brgy Pembo, Makati City');
define('EMAILADDRESS', 'acevergeldrapiza@gmail.com');
define('CONTACTNUMBER', '09054336293');
define('WEBADDRESS', 'avmdrapiza@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 6');
define('DESCRIPTION', 'String Functions in PHP');

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
    border: solid 2px grey;width:100%;padding:20px;text-align:center">
            <?php
            $string = isset($_POST['string']) ? $_POST['string'] : ' ';
            echo '<form method=post action="">';
            echo '<h1>String Functions in PHP</h2>';
            echo '<input type="text" name="string" value="', $string, '" size=100><br /><br />';
            echo '<input type="submit" value="Apply Functions">&nbsp;';
            echo '<input type="reset" value="Reset"><br />';
            echo '</form>';

            echo "<table border = '1' width = '637' cellspacing = '1'>";
            echo "<tr>";
            echo "<td><center>No.</td>";
            echo "<td><center>Description</td>";
            echo "<td><center>Output</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>1.</td>";
            echo "<td>Original value of $ string </td>";
            echo "<td>*", $string, "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>2.</td>";
            echo "<td>Number of characters</td>";
            echo "<td>*", strlen($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>3.</td>";
            echo "<td>Number of words</td>";
            echo "<td>*", str_word_count($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>_</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>4.</td>";
            echo "<td>First character to uppercase</td>";
            echo "<td>*", ucfirst($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>5.</td>";
            echo "<td>First character of each word to uppercase</td>";
            echo "<td>*", ucwords($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>6.</td>";
            echo "<td>To lowercase</td>";
            echo "<td>*", strtolower($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>7.</td>";
            echo "<td>To uppercase</td>";
            echo "<td>*", strtoupper($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>_</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>8.</td>";
            echo "<td>Without leading spaces</td>";
            echo "<td>*", ltrim($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>9.</td>";
            echo "<td>Without trailing spaces</td>";
            echo "<td>*", rtrim($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>10.</td>";
            echo "<td>Without leading and trailing spaces</td>";
            echo "<td>*", trim($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>_</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>11.</td>";
            echo "<td>MD5 value of $ string</td>";
            echo "<td>*", md5($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>12.</td>";
            echo "<td>Base64 value of $ string</td>";
            echo "<td>*", base64_encode($string), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>_</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>13.</td>";
            echo "<td>First 16 characters</td>";
            echo "<td>*", substr($string, 0, 19), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>14.</td>";
            echo "<td>Last 4 characters</td>";
            echo "<td>*", substr($string, -4), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>15.</td>";
            echo "<td>4 characters starting from the 20th position</td>";
            echo "<td>*", substr($string, 23, 7), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>_</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>16.</td>";
            echo "<td>Position of the word 'guide'</td>";
            $position = strpos($string, "guide");
            echo "<td>*", var_dump($position), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>17.</td>";
            echo "<td>Position for the word 'UE'</td>";
            $positions = strpos($string, "UE");
            echo "<td>*", var_dump($positions), "*</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>_</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>18.</td>";
            echo "<td>'HTML' word in uppercase</td>";
            if (strpos($string, 'html') !== false) {
                echo "<td>*", strtoupper('html'), "*</td>";
            } else {
                echo "<td>*", var_dump($string), "*</td>";
            }
            echo "</tr>";

            echo "<tr>";
            echo "<td>19.</td>";
            echo "<td>'&lt;INPUT&gt;' word in uppercase</td>";
            if (strpos($string, '<input>') !== false) {
                echo "<td>*", strtoupper('<input>'), "*</td>";
            } else {
                echo "<td>*", var_dump($string), "*</td>";
            }
            echo "</tr>";

            echo "<tr>";
            echo "<td>_</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>20.</td>";
            echo "<td>Strings converted to array</td>";
            echo "<td>*", str_split($string), "*</td>";
            echo "</tr>";
            echo "</table>";
            ?>
        </div>

    </div>
    <?PHP include 'footer.php'; ?>
</body>

</html>