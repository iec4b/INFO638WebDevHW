<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Code Homework #3</title>
    <link rel="stylesheet"
      href="style.css" />
  </head>
  <body>
    <div>
      <h1>Code Homework #3 [Arrays]</h1>
      <h2>Micah Langer, INFO 638-01, Spring 2021</h2>
    </div>

    <div>
      <?php
        
      /*Challenge 1*/

        echo "<h2>1. Challenge: Book lists</h2>";

        $bookLists = array(//top level of the array
          array(//each book an associative array within the numerically indexed $bookLists array
            'title'=> "PHP and MySQL Web Development",//each of the book's data shall be a key with a value
            'authorFirst' => "Luke",
            'authorLast' => "Welling",
            'pages' => 144,
            'type' => "Paperback",
            'price' => 31.63),
          array(
            'title' => 'Web Design with HTML, CSS, JavaScript and jQuery', 
            'authorFirst' => "Jon",
            'authorLast' => "Duckett",
            'pages' => 135,
            'type' => "Paperback",
            'price' => 41.23),
          array(
            'title'=> 'PHP Cookbook: Solutions & Examples for PHP Programmers', 
            'authorFirst' => "David",
            'authorLast' => "Sklar",
            'pages' => 14,
            'type' => "Paperback",
            'price' => 40.88),
          array(
            'title'=> 'JavaScript and JQuery: Interactive Front-End Web Development', 
            'authorFirst' => "Jon",
            'authorLast' => "Duckett",
            'pages' => 251,
            'type' => "Paperback",
            'price' => 22.09),
          array(
            'title'=> 'Modern PHP: New Features and Good Practices', 
            'authorFirst' => "Josh",
            'authorLast' => "Lockhart",
            'pages' => 7,
            'type' => "Paperback",
            'price' => 28.49),
          array(
            'title'=> 'Programming PHP', 
            'authorFirst' => "Kevin",
            'authorLast' => "Tatroe",
            'pages' => 26,
            'type' => "Paperback",
            'price' => 28.96));

        //set up a table to display the book list

        echo '<table> 
                <caption>Book List</caption>
                <thead>
                  <tr>
                    <th scope ="col">Title</th>
                    <th scope ="col">First Name</th>
                    <th scope ="col">Last Name</th>
                    <th scope ="col">Number of pages</th>
                    <th scope ="col">Type</th>
                    <th scope ="col">Price</th>
                  </tr>
                </thead>
                <tbody>';
        foreach ($bookLists as $book => $item) {//this will create a new row in the table for each book on the list and populate cells in the table with the respective data
            echo "<tr>
                    <td>" . '<a href="https://www.google.com/search?q=' . urlencode($item['title']) . "+" . urlencode($item['authorFirst']) . "+" . urlencode($item['authorLast']) .'">' . $item['title'] . "</a>" . "</td>
                    <td>" . $item['authorFirst'] . "</td>
                    <td>" . $item['authorLast'] . "</td>
                    <td>" . $item['pages'] . "</td>
                    <td>" . $item['type'] . "</td>
                    <td>" . $item['price'] . "</td>
                  </tr>";
            
          }
        echo '</tbody>
              </table>';
        $totalPrice = (array_sum(array_column($bookLists, 'price')));//This runs the array_sum function on all columns within the array by the key 'price'. I came to this solution by consulting the PHP manual and googling how to do sum functions for multidimensional arrays, which pointed me to a stack overflow solution proposed by Blablaenzo: https://stackoverflow.com/questions/12838729/multidimensional-array-array-sum
        echo "<p>Your total price is: $totalPrice</p>";

        



        

      /*Challenge 2: Coint Toss, Cont'd*/
        echo "<br><h2>2. Challenge: Coin toss cont'd</h2><br>";
        echo "<h3>Coin toss function</h3><br>";

        print(coin_streak(8));//calls the coin_streak function (defined below) and prints the returns. Control the desired number of heads here.

        function coin_streak($n) {
          $tally = 0;//this will count the total number of flips
          $flip = 0;//this will record the result of the flip where 0 is tails and 1 is heads
          $heads = 0;//this will count the total number of consecutive heads flipped
          $close = -1;//this will count the total number of times the the coin came up tails just one flip before it hit the streak

          if ($n == 1) {
          echo "<br><p>Flip a coin until it lands heads-up 1 time:</p><br>";//corrects grammar for singular 
          } else {
            echo "<br><p>Flip a coin until it lands heads-up $n times:</p><br>";//this is more likely
          }
          
          while ($heads < $n) {//n shall be the desired number of heads to flip consecutively
            $flip = mt_rand(0,1);//random number generator limited to a range of 0-1, 0tails 1heads
            if ($flip == 0) {//if the flip result is tails
              $heads = 0;//reset the heads tracker
              ++$tally;//add one to the overall tally of flips
              echo '<img class="coinTails" src="dime-tails.jpg"  title="Dime Tail (Back)" alt="Dime Tail (Back)" />';//show the coin tails-up
              continue;//go back to the beginning of the loop
              
            } else//if the flip result is heads...
              ++$heads;//add one to the heads tracker
              ++$tally;//add one to the overall tally of flips
              echo '<img class="coinHeads" src="dime-heads.jpg" title="Dime Head (Front)" alt="Dime Head (Front)" />';//show the coin tails-up
            if ($heads == ($n - 1)) {
              ++$close;//just for fun, this tracks the total number of times you were one away from hitting the streak 
            }
            
              
          }
          
          echo "<br><p>Total number of tosses was: " . ($tally) . "</p><br>";//shows how many flips were made

          if ($n > 2) {
          echo "<br><p>Total number of times you were one away from the streak: " . $close . "</p><br>";
          }//shows the number of times you were one away from hitting the streak
        }

        
        
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
