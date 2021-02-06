<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Code Homework #1</title>
  </head>
  <body>
      
        <?php /*
          $cents = 1112;
          $dollars = substr($cents, 0, 1);
          $dimes = substr($cents, 1, 1);
          $pennies = substr($cents, 2, 1);
          
          echo "$dollars <br> \n";
          echo "$dimes <br> \n";   
          echo "$pennies <br> \n"
          */ 
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