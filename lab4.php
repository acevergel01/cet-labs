<?php
define('NAME', 'ACE VERGEL DRAPIZA');
define('STUDENTNUMBER', '2019-037290-MN-0');
define('ADDRESS', 'Brgy Pembo, Makati City');
define('EMAILADDRESS', 'acevergeldrapiza@gmail.com');
define('CONTACTNUMBER', '09054336293');
define('WEBADDRESS', 'avmdrapiza@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 4');
define('DESCRIPTION', 'Functions and Control Structures - Number to Words');

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
    <div style="display: inline-block;border-radius: 5px;border: solid 2px grey;padding:20px">
      <?PHP
      function numberTowords(float $amount)
      {
        $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
        // Check if there is any number after decimal
        $amt_hundred = null;
        $count_length = strlen($num);
        $x = 0;
        $string = array();
        $change_words = array(
          0 => '', 1 => 'One', 2 => 'Two',
          3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
          7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
          10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
          13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
          16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
          19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
          40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
          70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety'
        );
        $here_digits = array('', 'Hundred');
        while ($x < $count_length) {
          $get_divider = ($x == 2) ? 10 : 100;
          $amount = floor($num % $get_divider);
          $num = floor($num / $get_divider);
          $x += $get_divider == 10 ? 1 : 2;
          if ($amount) {
            $add_plural = (($counter = count($string)) && $amount > 9) ? 's' : null;
            $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
            $string[] = ($amount < 21) ? $change_words[$amount] . ' ' . $here_digits[$counter] . $add_plural . ' 
         ' . $amt_hundred : $change_words[floor($amount / 10) * 10] . ' ' . $change_words[$amount % 10] . ' 
         ' . $here_digits[$counter] . $add_plural . ' ' . $amt_hundred;
          } else $string[] = null;
        }
        $implode = implode('', array_reverse($string));
        return ($implode);
      }
      // CONTENT SECTION
      $number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);
      if (($number < 1) or ($number > 999)) {
        if (count($_POST) > 0) {
          $words = 'Sorry, I can process 1 to 999 only!';
        } else {
          $words = '&nbsp;';
        }
      } else {
        $words = $number . ' in words is ' . NumberToWords($number);
      }
      echo '<form action="" method="post">';
      echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
      echo '<tr><td align="center"><strong>Number to Words</strong></td></tr>';
      echo '<tr><td>Enter a number (1-999)&nbsp;<input type=text name=number>&nbsp;';
      echo '<input type="submit" value="Convert to words"></td></tr>';
      echo '<tr><td align="center"><strong>', $words, '</strong></td></tr>';
      echo '</table>';
      echo '</form>';

      ?>
    </div>

  </div>
  <?PHP include 'footer.php'; ?>
</body>

</html>