<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Code Homework #1</title>
  </head>
  <body>
      
      <?php
      
      $cents = 159;
      $dollars = (($cents / 100) - (($cents % 100)/100));
      echo $dollars;
      echo "<br>";
      $quarters = (($cents % 100) / 25) - (($cents % 25) / 25);
      echo $quarters;
      echo "<br";
      echo "Hello?";
      
      ?>
      
    <div>
      <p>
    <?php
      for ($count = 5 ; $count >= 1 ; --$count) { //Lower limit set to 1 because $down will set the number to 0, and otherwise it would repeat one too many times.
          $down = $count -1;
          if ($count >1){
          echo "$count bottles of beer on the wall, $count bottles of beer! \n <br> \n Take one down, pass it around, $down bottles of beer on the wall! \n <br> \n <br> \n";
          }
            else { //exception for the last verse, when *bottle* is singular, not plural
              echo "$count bottle of beer on the wall, $count bottle of beer! \n <br> \n Take one down, pass it around, $down bottles of beer on the wall! \n <br> \n <br> \n";
          }
      }
      ?>
      </p>
      </div>
  </body>
</html>