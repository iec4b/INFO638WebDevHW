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
      
          $cents = 159; //set the number of cents to process
          echo "You are due $cents cent(s) in total change. \n";
          echo "<br> \n";
          echo "That makes: \n";
          echo "<br> \n";
          $dollars = ($cents - $cents % 100) / 100; //calculate dollars as number of times total cents can be divided by an even 100
          echo "<ul> \n";
          echo "<li>$dollars dollar(s)</li> \n";
          echo "<br> \n";
          $quarters = (($cents - $dollars * 100) - (($cents - $dollars * 100) % 25)) / 25; //calculate what's left over after dollars are removed, then subtract from that the remainder should that be divided by 25. This will ensure that dividing that difference by 25 yields an integer. All calculations below save that of pennies follow the same pattern.
          echo "<li>$quarters quarter(s)</li> \n";
          echo "<br> \n";
          $dimes = (($cents - $dollars * 100 - $quarters *25) - ($cents - $dollars * 100 - $quarters *25) % 10) / 10;
          echo "<li>$dimes dime(s)</li> \n";
          echo "<br> \n";
          $nickels = (($cents - $dollars * 100 - $quarters * 25 - $dimes * 10) - ($cents - $dollars * 100 - $quarters * 25 - $dimes * 10) % 5) / 5;
          echo "<li>$nickels nickel(s)</li> \n";
          echo "<br> \n";
          $pennies = $cents % 5; //For pennies, simply find the remainder after nickels have been removed. There is no need for any fancy arithmetic in this case because pennies are the smallest coin denomination and therefore should be exactly equal in number to the remainder for the purpose of making change under perfect conditions, i.e. the till has ample supply of all coins.
          echo "<li>$pennies cent(s)</li> \n";
          echo "</ul>";
        
        ?>
      </p>
    </div>
    <div>
      <h3>Challenge 2: 99 Bottles of Beer</h3>    
      <p>
        <?php
          for ($count = 99 ; $count >= 1 ; --$count) { //Set the count to however many bottles you want the song to begin with. Normally this is 99. Lower limit set to 1 because $down will eventually set $count to 0, so otherwise it would repeat one too many times.
            $down = $count -1;
            if ($count >1){
            echo "$count bottles of beer on the wall, $count bottles of beer! \n <br> \n Take one down, pass it around, $down bottles of beer on the wall! \n <br> \n <br> \n";
            }
              else { //These if/else statements provide an exception for the last verse, when *bottle* is singular, not plural.
                echo "$count bottle of beer on the wall, $count bottle of beer! \n <br> \n Take one down, pass it around, $down bottles of beer on the wall! \n <br> \n <br> \n";
            }
          }
        ?>
      </p>
    </div>
    <footer>
      <p>&copy; Copyright 2021 Micah Langer</p>
    </footer>
  </body>
</html>