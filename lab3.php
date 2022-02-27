<?php
define('NAME', 'ACE VERGEL DRAPIZA');
define('STUDENTNUMBER', '2019-037290-MN-0');
define('ADDRESS', 'Brgy Pembo, Makati City');
define('EMAILADDRESS', 'acevergeldrapiza@gmail.com');
define('CONTACTNUMBER', '09054336293');
define('WEBADDRESS', 'avmdrapiza@iskolarngbayan.pup.edu.ph');
define('LABTITLE', 'Laboratory Activity No. 3');
define('DESCRIPTION', 'Working with Data Types and Operators');

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

      $myinteger = 10;
      $myfloat = 10.57;
      $mystring = '10 apples';
      $myboolean = TRUE;
      $mynull = NULL;
      $myarray = array(1, 2, 3);

      ?>
      <tr>
        <td> 1a. <?php echo $myinteger; ?></td>
        <td> <?php echo var_dump($myinteger); ?></td>
      </tr> </br>
      <tr>
        <td> 2a.<?php echo $myinteger; ?> + 10 </td>
        <td> <?php echo var_dump($myinteger + 10); ?></td>
      </tr></br>
      <tr>
        <td> 3a. <?php echo $myinteger; ?> & 8</td>
        <td> <?php echo var_dump($myinteger & 8); ?> </td>
      </tr></br>
      <tr>
        <td> 4a.<?php echo $myinteger; ?> == 10</td>
        <td><?php echo var_dump($myinteger == 10); ?></td>
      </tr></br>
      <tr>
        <td> 5a. <?php echo $myinteger; ?> >= 10 and <?php echo $myinteger; ?> <= 20</td>
        <td> <?php echo var_dump($myinteger >= 10 and $myinteger <= 20); ?> </td>
      </tr> </br>


      </br></br>
      <tr>
        <td> 1b.<?php echo $myfloat; ?> </td>
        <td> <? echo var_dump($myfloat); ?></td>
      </tr><br>
      <tr>
        <td> 2b.<?php echo $myinteger; ?> - 5 </td>
        <td><?php echo var_dump($myinteger - 5); ?></td>
      </tr></br>
      <tr>
        <td> 3b.<?php echo $myinteger; ?>|8</td>
        <td> <?php echo var_dump($myinteger | 8); ?> </td>
      </tr> </br>
      <tr>
        <td> 4b.<?php echo $myinteger; ?> > 10</td>
        <td><?php echo var_dump($myinteger > 10); ?> </td>
      </tr> </br>
      <tr>
        <td> 5b. <?php echo $myinteger; ?> == 10 or <?php echo $myinteger; ?> == 20</td>
        <td> <?php echo var_dump($myinteger == 10 or $myinteger == 20); ?> </td>
      </tr> </br>

      </br> </br>
      <tr>
        <td> 1c.<?php echo $mystring; ?> </td>
        <td> <? echo var_dump($mystring); ?></td>
      </tr><br>
      <tr>
        <td> 2c.<?php echo $myinteger; ?> * 2 </td>
        <td><?php echo var_dump($myinteger * 2); ?></td>
      </tr></br>
      <tr>
        <td> 3c.<?php echo $myinteger; ?> << 1</td>
        <td> <?php echo var_dump($myinteger << 1); ?></td>
      </tr></br>
      <tr>
        <td>4c.<?php echo $myinteger; ?> >= 10</td>
        <td><?php echo var_dump($myinteger >= 10); ?></td>
      </tr></br>
      <tr>
        <td> 5b. <?php echo $myinteger; ?> == 10 xor <?php echo $myinteger; ?> == 20</td>
        <td> <?php echo var_dump($myinteger == 10 xor $myinteger == 20); ?> </td>
      </tr> </br>


      </br> </br>
      <tr>
        <td> 1d.<?php echo $myboolean; ?> </td>
        <td> <? echo var_dump($myboolean); ?></td>
      </tr><br>
      <tr>
        <td> 2d.<?php echo $myinteger; ?> / 3 </td>
        <td><?php echo var_dump($myinteger / 3); ?></td>
      </tr></br>
      <tr>
        <td> 3d.<?php echo $myinteger; ?>>>1</td>
        <td><?php echo var_dump($myinteger >> 1); ?> </td>
      </tr> </br>
      <tr>
        <td> 4d.<?php echo $myinteger; ?> < 20</td>
        <td><?php echo var_dump($myinteger < 20); ?> </td>
      </tr> </br>

      </br> </br>
      <tr>
        <td> 1e.<?php echo $mynull; ?> </td>
        <td> <? echo var_dump($mynull); ?></td>
      </tr><br>
      <tr>
        <td> 2e.<?php echo $myboolean; ?> + 1 </td>
        <td><?php echo var_dump($myboolean + 1); ?></td>
      </tr></br>
      <tr>
        <td> 4e.<?php echo $myinteger; ?> <=20< /td>
        <td><?php echo var_dump($myinteger <= 20); ?></td>
      </tr> </br>


      </br> </br>
      <tr>
        <td> 1f.<?php echo implode(',', $myarray); ?> </td>
        <td> <? echo var_dump(implode(',', $myarray)); ?></td>
      </tr><br>
      <tr>
        <td> 2f.<?php echo $mystring; ?> *2 </td>
        <td><?php echo (var_dump($mystring) * 2); ?></td>
      </tr></br>
      <tr>
        <td> 4f.<?php echo $myinteger . "==" . $mystring; ?> </td>
        <td><?php echo var_dump($myinteger == $mystring); ?> </td>
      </tr> </br>
      ?>
    </div>
  </div>


  <?PHP include 'footer.php'; ?>
</body>

</html>