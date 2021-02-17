<?php
  
/*Challenge 1*/

  echo "<h2>1. Challenge: ISBN Validation</h2>";

  $isbn = "0553373730"; //set the isbn
  
  function isbn_test($isbn) {
    if (strlen($isbn) != 10) {
      return FALSE;
    } // tests whether the $isbn actually has the prereqeuisite 10 characters

    $isbnArray = array('first' => $isbn[0],
                    'second' => $isbn[1],
                    'third' => $isbn[2],
                    'fourth' => $isbn[3],
                    'fifth' => $isbn[4],
                    'sixth' => $isbn[5],
                    'seventh' => $isbn[6],
                    'eighth' => $isbn[7],
                    'ninth' => $isbn[8],
                    'tenth' => $isbn[9]); //converts isbn to associative array so it can more easiily be handled digit by digit

    if ($isbnArray['tenth'] == "X" or $isbnArray['tenth'] == "x") {
    $isbnArray['tenth'] = 10;
    } //allows for cases where tenth digit is x or X

    $isbntest = (10 * $isbnArray['first']) + (9 * $isbnArray['second']) + (8 * $isbnArray['third']) + (7 * $isbnArray['fourth']) + (6 * $isbnArray['fifth']) + (5 * $isbnArray['sixth']) + (4 * $isbnArray['seventh']) + (3 * $isbnArray['eighth']) + (2 * $isbnArray['ninth']) + (1 * $isbnArray['tenth']); // performs sum of digits multiplied by 10, 9, 8, etc...

    $isbnRem = ($isbntest % 11); // performs final test calculation, finding remainder after division by 11

    if ($isbnRem == 0) return TRUE; //returns TRUE if isbn is valid, i.e. the test arithmetic checks out okay
    else return FALSE; //returns FALSE if the arithmetic doesn't check out
  }

  if (isbn_test($isbn) == TRUE) {
    echo "Testing ISBN $isbn which is valid!<br>";
    echo "To find out more about the book with this ISBN, follow this <a href=http://www.isbnsearch.org/isbn/$isbn>link</a><br>"; // prints valid result to browser, along with link to book by that isbn
  }

  if (isbn_test($isbn) == FALSE) {
    echo "Testing ISBN $isbn which is not valid!"; //prints invalid result to browser
  }

/*Challenge 2*/

echo "<br><h2>2. Challenge: Coin Toss</h2><br>";

$counter = 0;
$toss = 0;
$last = 0;

while ($toss >= 0) {
  $toss = mt_rand(0,1);
  ++$counter;
  if ($toss == 0) {
    echo "tails<br>";
    $last = 0;
    continue;  
  }
  if ($toss == 1) {
    echo "heads<br>";
    $last = 1;
    while ($last == 1) {
      $toss = mt_rand(0,1);
      if ($toss == 0) {
        echo "tails<br>";
        ++$counter;
        break 1;
      }
      if ($toss == 1) {
        echo "heads<br>";
        ++$counter;
        break 2;
      }
    }
  }
}



    


echo "number of tosses: " . ($counter) . "<br>";
echo "last: " . $last . "<br>";
echo "toss: " . $toss . "<br>";
?>