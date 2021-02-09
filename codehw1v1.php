<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Code Homework #1</title>
  </head>
  <body>
      
      <?php
      
      $cents = 1235650;
      echo "$cents cents";
      echo "<br>";
      $dollars = (($cents / 100) - (($cents % 100)/100));
       if ($dollars < 1) {
          $dollars = 0; 
      }
      echo "$dollars dollars";
      echo "<br>";
      $quarters = (($cents % 100) / 25) - (($cents % 25) / 25);
       if ($quarters < 1) {
          $quarters = 0;
      }
      
      echo "$quarters quarters";
      echo "<br>";
      $dimes = ((($cents - $dollars * 100 - $quarters * 25) / 10) - (($cents % 10) / 10));
      if ($dimes < 1) {
          $dimes = 0;
      }
      
      echo "$dimes dimes";
      echo "<br>";
      $nickels = ((($cents - $dollars * 100 - $quarters * 25 - $dimes * 10) / 5) - (($cents % 5) / 5)) ;
       if ($nickels < 1) {
          $nickels = 0;
      }
      
      echo "$nickels nickels";
      echo "<br>";
      $pennies = $cents - $dollars * 100 - $quarters * 25 - $dimes * 10 - $nickels * 5;
      echo "$pennies pennies";
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