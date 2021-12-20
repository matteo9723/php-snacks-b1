<?php
  $db = [
      'teachers' => [
          [
              'name' => 'Michele',
              'lastname' => 'Papagni'
          ],
          [
              'name' => 'Fabio',
              'lastname' => 'Forghieri'
          ]
      ],
      'pm' => [
          [
              'name' => 'Roberto',
              'lastname' => 'Marazzini'
          ],
          [
              'name' => 'Federico',
              'lastname' => 'Pellegrini'
          ]
      ]
  ];

  $db_teachers=$db['teachers'];
  $db_pm=$db['pm'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="box-insegnanti">
      <ul>
        <?php
            for($i=0;$i<count($db_teachers);$i++){
                echo "<li>{$db_teachers[$i]['name']}</li>";
                echo "<li>{$db_teachers[$i]['lastname']}</li>";
            };
        ?>
      </ul>
  </div>
  <div class="box-studenti">
      <ul>
        <?php
            for($i=0;$i<count($db_pm);$i++){
                echo "<li>{$db_pm[$i]['name']}</li>";
                echo "<li>{$db_pm[$i]['lastname']}</li>";
            };
        ?>
      </ul>
  </div>
</body>
</html>