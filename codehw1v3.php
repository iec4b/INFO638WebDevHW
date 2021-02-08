<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Code Homework #1</title>
  </head>
  <body>
    <div>  
      <h1>Code Homework #1 [Variables, expressions, and control flow]</h1>
      <h2>Micah Langer, INFO 638-01, Spring 2021</h2>
    </div>
    <div>    
      <h3>Challenge 1: Correct Change</h3>
      <p>
        <?php
      
          $cents = 100;
          echo "$cents cents \n";
          echo "<br> \n";
          $dollars = ($cents - $cents % 100) / 100;
          echo "$dollars dollars \n";
          echo "<br> \n";
          $quarters = (($cents - $dollars * 100) - (($cents - $dollars * 100) % 25)) / 25;   
          echo "$quarters quarters \n";
          echo "<br> \n";
          $dimes = (($cents - $dollars * 100 - $quarters *25) - ($cents - $dollars * 100 - $quarters *25) % 10) / 10;
          echo "$dimes dimes \n";
          echo "<br> \n";
          $nickels = (($cents - $dollars * 100 - $quarters * 25 - $dimes * 10) - ($cents - $dollars * 100 - $quarters * 25 - $dimes * 10) % 5) / 5;
          echo "$nickels nickels \n";
          echo "<br> \n";
          $pennies = $cents % 5;
          echo "$pennies pennies \n";
        ?>
      </p>
    </div>
    <div>
      <h3>Challenge 2: 99 Bottles of Beer</h3>    
      <p>
        <?php
          for ($count = 99 ; $count >= 1 ; --$count) { //Lower limit set to 1 because $down will set the number to 0, and otherwise it would repeat one too many times.
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