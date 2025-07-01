<?php
  header('Content-Type: text/html; charset=utf-8');

  if (!empty($_POST['input_data'])) {
    $text = $_POST['input_data'] . "\n";
    $path = 'data.txt';
    $fh = fopen($path, 'a');
    if ($fh === false) {
      die("<p>Error: cannot open file for writing.</p>");
    }
    fwrite($fh, $text);
    fclose($fh);
    echo "<p>Data successfully saved to <strong>$path</strong>.</p>";
  } else {
    echo "<p>Error: No data received.</p>";
  }
?>
