<?php
  $stringa='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ut expedita modi labore suscipit, officiis pariatur nulla eligendi eius veritatis! Rerum quo quam ratione qui atque aperiam ducimus corporis fugiat quidem reiciendis fuga doloribus aut tenetur, libero omnis ipsum inventore voluptatem necessitatibus at deleniti voluptate laudantium assumenda? Voluptas unde libero modi exercitationem incidunt atque culpa necessitatibus quod quae repellendus similique eum adipisci numquam, nostrum deserunt alias ipsa, a quia. Laudantium excepturi sint natus corporis nulla facilis voluptatum, non fugit consequuntur officiis iste voluptatem iure fuga quidem assumenda, dolore at debitis eveniet! Eaque perspiciatis voluptate, unde ipsa aspernatur voluptatum hic quo!';
  $stringaEsplosa=explode(".",$stringa);
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
      for ($i=0;$i<count($stringaEsplosa);$i++){
        echo "<li>{$stringaEsplosa[$i]}</li>"; 
      } ;
    ?>
  </ul>
</body>
</html>