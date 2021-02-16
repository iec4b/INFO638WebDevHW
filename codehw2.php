<?php
  
  echo "<h2>1. Challenge: ISBN Validation</h2>";

  $isbn = "123456789x"; //set the isbn
  echo "The ISBN entered was: $isbn<br><br>"; //show the isbn
  echo "Digits:<br><br>"; 
  $isbnArray = array('first' => $isbn[0],
                     'second' => $isbn[1],
                     'third' => $isbn[2],
                     'fourth' => $isbn[3],
                     'fifth' => $isbn[4],
                     'sixth' => $isbn[5],
                     'seventh' => $isbn[6],
                     'eighth' => $isbn[7],
                     'ninth' => $isbn[8],
                     'tenth' => $isbn[9]);
  foreach($isbnArray as $digit => $value) {
    echo "$digit: $value<br>"; //show the isbn by digit
  }

  if ($isbnArray['tenth'] == "X" or $isbnArray['tenth'] == "x") {
    $isbnArray['tenth'] = 10; //allows for cases where tenth digit is x or X
  }

  echo "<br>";
  $isbntest = (10 * $isbnArray['first']) + (9 * $isbnArray['second']) + (8 * $isbnArray['third']) + (7 * $isbnArray['fourth']) + (6 * $isbnArray['fifth']) + (5 * $isbnArray['sixth']) + (4 * $isbnArray['seventh']) + (3 * $isbnArray['eighth']) + (2 * $isbnArray['ninth']) + (1 * $isbnArray['tenth']); // performs sum of digits multiplied by 10, 9, 8, etc...

  echo "ISBN test value: " . $isbntest . "<br>";
  $isbnRem = ($isbntest % 11); // performs final test calculation, finding remainder after division by 11
  echo "Remainder after dividing by 11 is " . $isbnRem . "<br>";  
  if ($isbnRem == 0) {
    echo "Valid ISBN";
  }
  else echo "Invalid ISBN"; //if the remainder is 0, it is a valid ISBN, if the remainder is not zero, it is invalid. Prints result to screen accordingly.
//problem is that it requires exactly ten characters be entered.
?>