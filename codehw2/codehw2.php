<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Code Homework #1</title>
    <link rel="stylesheet"
      href="style.css" />
  </head>
  <body>
    <div>
      <h1>Code Homework #1 [Functions]</h1>
      <h2>Micah Langer, INFO 638-01, Spring 2021</h2>
    </div>

    <div>
      <?php
        
      /*Challenge 1*/

        echo "<h2>1. Challenge: ISBN Validation</h2>";

        $isbn = "123456789";
        echo isbn_validator($isbn);
        echo isbn_validator("123456789x");
        echo isbn_validator(123);
        echo isbn_validator(1491978910);
        
        function isbn_test($n) {//a function that tests the validity of an isbn
          if (strlen($n) != 10) {
            return FALSE;
          } // tests whether the $isbn actually has the prereqeuisite 10 characters

          $isbnArray = array('first' => $n[0],
                          'second' => $n[1],
                          'third' => $n[2],
                          'fourth' => $n[3],
                          'fifth' => $n[4],
                          'sixth' => $n[5],
                          'seventh' => $n[6],
                          'eighth' => $n[7],
                          'ninth' => $n[8],
                          'tenth' => $n[9]); //converts isbn to associative array so it can more easiily be handled digit by digit

          if ($isbnArray['tenth'] == "X" or $isbnArray['tenth'] == "x") {
          $isbnArray['tenth'] = 10;
          } //allows for cases where tenth digit is x or X

          $isbntest = (10 * $isbnArray['first']) + (9 * $isbnArray['second']) + (8 * $isbnArray['third']) + (7 * $isbnArray['fourth']) + (6 * $isbnArray['fifth']) + (5 * $isbnArray['sixth']) + (4 * $isbnArray['seventh']) + (3 * $isbnArray['eighth']) + (2 * $isbnArray['ninth']) + (1 * $isbnArray['tenth']); // performs sum of digits multiplied by 10, 9, 8, etc...

          $isbnRem = ($isbntest % 11); // performs final test calculation, finding remainder after division by 11

          if ($isbnRem == 0) return TRUE; //returns TRUE if isbn is valid, i.e. the test arithmetic checks out okay
          else return FALSE; //returns FALSE if the arithmetic doesn't check out
        }

        function isbn_validator($n){// a function that delivers the result of isbn_test function in a human-readable form
            if (isbn_test($n) == TRUE) {
            return "<p class=\"valid\">Testing ISBN $n which is valid!<br>To find out more about the book with this ISBN, follow this <a href=http://www.isbnsearch.org/isbn/$n>link</a></p><br>"; // prints valid result to browser, along with link to book by that isbn
          }

          if (isbn_test($n) == FALSE) {
            return "<p class=\"invalid\">Testing ISBN $n which is not valid!</p><br>"; //prints invalid result to browser
          }
        }



        
      
        


      /*Challenge 2*/

      echo "<br><h2>2. Challenge: Coin Toss</h2><br>";
      echo "<h3>2a. Coin toss series</h3><br>";

      for ($c=1; $c<=9; $c += 2) {//$c will be the max number of times to flip, only flips odd numbers of times because $c is set to increase by 2 from an initial value of 1
        echo "<br><p>Flipping a coin $c time(s):</p><br>";
        for ($g=1; $g <= $c; ++$g) {//a subloop that flips the coin for a total number of times equal to current value of $c, then returns to the main loop
          $coin = mt_rand(0,1);
          if ($coin == 0) {
            echo '<img class="coinTails" src="dime-tails.jpg"  title="Dime Tail (Back)" alt="Dime Tail (Back)" />';
          } else 
            echo '<img class="coinHeads" src="dime-heads.jpg" title="Dime Head (Front)" alt="Dime Head (Front)" />';
        }
      }

      echo "<h3>2b. Coin toss streaks</h3><br>";
      echo "<p>Flip a coin until it comes up heads twice in a row:</p>";

      //establishing variables
      $counter = 0;
      $toss = 0;
      $last = 0;

      /*The ultimate goal is to flip a coin repeatedly until it comes up heads twice in a row. This loop will keep "tossing a coin" or in other words running mt_rand(0,1) to yield a random 1 (heads) or 0 (tails) result, which becomes the value of $toss. If it comes up tails, it just starts over. If it comes up heads, it branches off into another loop that tries for another heads. If the second loop comes up heads, the whole thing stops. If, however, it comes up tails, it goes back to the very start of the loop. The $last variable "saves" the most recent result, and is the trigger for branching off into the second loop or returning to the original loop. In other words, if the last flip came up heads, $last will be set to 1 and the loop will branch off into a "while ($last==1)" loop, or put another way, a "while (last toss came up heads)" loop. The $counter simply keeps track of how many tosses have been made. */
      while ($toss >= 0) {//starting loop
        $toss = mt_rand(0,1);
        ++$counter;
        if ($toss == 0) {//if the coin comes up tails, it sets the last result to tails and just starts over
          echo '<img class="coinTails" src="dime-tails.jpg"  title="Dime Tail (Back)" alt="Dime Tail (Back)" />';
          $last = 0;
          continue;  
        }
        if ($toss == 1) {//if the coin comes up heads, it sets the last result to heads and branches off
          echo '<img class="coinHeads" src="dime-heads.jpg" title="Dime Head (Front)" alt="Dime Head (Front)" />';
          $last = 1;
          while ($last == 1) {//this loop is like the first loop, except if it comes up heads it breaks out of the main loop
            $toss = mt_rand(0,1);
            if ($toss == 0) {//this means there was a tails right after a heads, so go back to the main loop, i.e. keep flipping the coin
              echo '<img class="coinTails" src="dime-tails.jpg"  title="Dime Tail (Back)" alt="Dime Tail (Back)" />';
              ++$counter;
              break 1;
            }
            if ($toss == 1) {//this means there was a heads AND the last toss was heads, so it's time to break out of the sub AND the main loop, i.e. stop flipping entirely.
              echo '<img class="coinHeads" src="dime-heads.jpg"  title="Dime Head (Front)" alt="Dime Head (Front)" />';
              ++$counter;
              break 2;
            }
          }
        }
      }

      echo "<br><p>Total number of tosses was: " . ($counter) . "</p><br>";//shows how many flips were made
      ?>
    </div>
    <div>
      <!-- attribution for the images -->
      <hr>
      <p>"Dime Head (Front)" by matthiasxc is licensed with CC BY 2.0. To view a copy of this license, visit https://creativecommons.org/licenses/by/2.0/
      <br>
      "Dime Tail (Back)" by matthiasxc is licensed with CC BY 2.0. To view a copy of this license, visit https://creativecommons.org/licenses/by/2.0/</p> 
      <br>
    </div>
    <footer>
      <p>&copy; Copyright 2021 Micah Langer</p>
    </footer>
  </body>
</html>
