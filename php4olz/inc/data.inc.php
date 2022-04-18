<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>data.inc.php</title>
</head>
<body>
    <?php
  function drawTable($cols, $rows, $color){

    echo '<table border="1">';
    for ($tr=1; $tr<=$rows; $tr++){

      $style = "style = 'background-color:$color'";
      echo '<tr'.$style.'>';
      for ($td=1; $td<=$cols; $td++){

        $style =" style = 'background-color:$color'";
          echo '<td'.$style.'>'. $tr*$td .'</td>';
    }
    echo '</tr>';
}
echo '</table>';
}
    ?>
</body>
</html>