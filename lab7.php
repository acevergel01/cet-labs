<?php
define('NAME', 'ACE VERGEL DRAPIZA');
define('STUDENTNUMBER', '2019-037290-MN-0');
define('ADDRESS', 'Brgy Pembo, Makati City');
define('EMAILADDRESS', 'acevergeldrapiza@gmail.com');
define('CONTACTNUMBER', '09054336293');
define('WEBADDRESS', 'avmdrapiza@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 7');
define('DESCRIPTION', 'Regular Expression');
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
      // SUPPLY THE MISSING PATTERN
      // $patterns IS A TWO DIMENSIONAL ARRAY CONTAINING [description, regex]
      $patterns[] = array('String containing "PHP"', 'PHP');
      $patterns[] = array('Starting with "PHP"', '^PHP');
      $patterns[] = array('Ends with "PHP"', 'PHP$');
      $patterns[] = array('String equal to "PHP"', '^PHP$');
      $patterns[] = array('Word starting with letter "C"', '^C.*$');
      $patterns[] = array('Non-empty lowercase string', '^[a-z]$');
      $patterns[] = array('Non-empty uppercase string', '^[A-Z]$');
      $patterns[] = array('Minimum 10 letters Maximum 20 letters', '[a-zA-Z]{10,20}');
      $patterns[] = array('Minimum 10 digits Maximum 20 digits', '[0-9]{10,20}');
      $patterns[] = array('Minimum 10 characters Maximum 20 characters', '.{10,20}');
      $patterns[] = array('Valid PHP variable name', '^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$');
      $patterns[] = array('Valid PHP constant name', '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]');
      $patterns[] = array('Valid decimal (base-10) integer', '[0-9]');
      $patterns[] = array('Valid float number', '^(\-?\d+\.\d+)$');
      $patterns[] = array('5-letter string', '^.[a-zA-Z]{4}$');
      $patterns[] = array('5-digit string', '^.[0-9]{4}$');
      $patterns[] = array('5 ascii characters', '.[ -~]{4}');
      $patterns[] = array('5 non-alphanumeric characters', '^.[^0-9a-zA-Z]{4}$');
      $patterns[] = array('Passing Grade (1.00,1.25,1.50 to 3.00)', '^(1.00|1.25|1.50|1.75|2.00|2.25|2.50|2.75|3.00)$');
      $patterns[] = array('Sub-domain Name (Ex. .edu or .ue.edu or .ccss.ue.edu)', '^[.][a-zA-Z]{2,5}$');

      echo '<form method="post">';
      $i = 1;
      echo '<table border=1>';
      echo '<tr><td colspan=5 align=center>Regular Expression Test</td></tr>';
      echo '<tr><td>No.</td><td>Description</td><td>String</td><td>RegEx
                    Pattern</td><td>Result</td>';
      foreach ($patterns as $pattern_item) {
        $description = $pattern_item[0];
        $pattern = $pattern_item[1];
        $value = isset($_POST["field$i"]) ? $_POST["field$i"] : '';
        if ($pattern == '') {
          $result = 'Missing pattern';
          $pattern = '&nbsp;';
        } else {
          $pattern = '/' . $pattern . '/';
          if (preg_match($pattern, $value))
            $result = 'Valid';
          else
            $result = 'Invalid';
        }
        echo "<tr>";
        echo "<td>$i.</td><td>$description</td>";
        echo "<td><input type=text name=\"field$i\" value=\"$value\"></td>";
        echo "<td>$pattern</td><td>$result</td>";
        echo '<tr>';
        $i++;
      }
      echo '</table><br />';
      echo '<input type="submit" name="validate" value="Validate Data">&nbsp';
      echo '<input type="reset" value="Reset">&nbsp';
      echo '</form>';
      ?>
    </div>

  </div>
  <?PHP include 'footer.php'; ?>
</body>

</html>