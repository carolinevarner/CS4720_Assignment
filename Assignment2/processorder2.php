<?php
  header('Content-Type: text/html; charset=utf-8');
  $tireqty  = htmlspecialchars($_POST['tireqty']);
  $oilqty   = htmlspecialchars($_POST['oilqty']);
  $sparkqty = htmlspecialchars($_POST['sparkqty']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"> 

  <title>Order Results</title>

  <style>
    body {
      font-family: 'Montserrat';
    }
  </style>
</head>
<body>
  <h1>Caroline’s Auto Parts</h1>
  <h2>Order Results</h2>
  <p>Your order is as follows:</p>
  <ul>
    <li><?php echo "$tireqty tires"; ?></li>
    <li><?php echo "$oilqty bottles of oil"; ?></li>
    <li><?php echo "$sparkqty spark plugs"; ?></li>
  </ul>
  <p>Processed at <?php echo date('g:i a, F j, Y'); ?></p>
</body>
</html>
