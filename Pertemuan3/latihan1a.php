<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latihan 1A</title>
</head>
<body>
  
<table border="1" cellpadding="10" cellspacing="0">
  <?php 
    for( $i = 1; $i <= 3; $i++){
      echo "<tr>";
      for($j = 1; $j <= 5; $j++) {
        echo "<td>$i,$j</td>";
      }
      echo "</tr>";
    }
  ?>
</table>
<br>
<table border="1" cellpadding="10" cellspacing="0">
  <?php for( $i = 1; $i <= 3; $i++) { ?>
    <tr>
      <?php for( $j = 1; $j <=5; $j++) { ?>
        <td><?php echo "$i,$j"; ?></td>
      <?php } ?>
    </tr>
  <?php } ?>
</table>
<br>
<table border="1" cellpadding="10" cellspacing="0">
  <?php for( $i = 1; $i <= 3; $i++) : ?>
    <tr>
      <?php for( $j = 1; $j <=5; $j++) : ?>
        <td><?= "$i,$j"; ?></td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>
</table>

</body>
</html>