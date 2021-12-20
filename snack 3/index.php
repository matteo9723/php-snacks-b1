<?php

  $array=[
    01-02-1970=> ['ciaooo','come va'],
    01-02-1971 => ['buongiorno','buonsalve']
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <ul> 
  <?php
    echo "<h1> 01-02-1970 </h1>";
    for($i=0;$i<count($array[01-02-1970]);$i++){
      echo " <li> {$array[01-02-1970][$i]}</li> ";
    };
    echo "<h1> 01-02-1971 </h1>";
    for($i=0;$i<count($array[01-02-1971]);$i++){
      echo " <li> {$array[01-02-1971][$i]}</li> ";
    };
    
 
  ?>
 </ul> 
</body>
</html>