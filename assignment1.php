<!-- Ndeye Anta Mbaye
 assignment1.php
 February 6, 2025 -->

<?php
//PART 1
echo "PART 1<br>"; //I added line breaks in my code to make my outputs more lisible on the browser

//Challenge 1
$name="Anta";
$age=25;
$favorite_color="blue";
//Concatenation of the variables in a sentence
echo "My name is ", $name, ". I'm ", $age, " and my favorite color is ", $favorite_color, ".";
echo "<br>";

//Challenge 2
echo "He said, \"PHP is fun!\" and left.";//Concatenation with escape characters
echo "First Line\nSecond Line";//Line break with PHP syntax
echo "<br>";

//Challenge 3
$greeting = 'Hello';
echo "Welcome to the PHP world! ";
Echo "Your age is " . $age;
echo "<br>";

//Challenge 4
echo "Welcome to PHP!";
$name = 'John';
echo 'Hello ', $name;
echo "<br>";

//Challenge 5
$price = 50; #Initial price
$discount = 10; #Discount amount
$finalPrice = $price - $discount; //Final price
echo "Total price: $" . $finalPrice; //Printing the final price
echo "<br><br>";


//PART 2
echo "PART 2<br>";

//Challenge 1
$number1 = 15;
$number2 = 3;
echo "Number 1: " . $number1;
echo "\t Number 2: " . $number2;
echo "<br>";

//Addition
echo "Addition: ". $number1+$number2;
echo "<br>";
//Substraction
echo "Substraction: ". $number1-$number2;
echo "<br>";
//Multiplication
echo "Multiplication: ". $number1*$number2;
echo "<br>";
//Division
echo "Division: ". $number1/$number2;
echo "<br>";
//Modulus
echo "Modulus: ". $number1%$number2;
echo "<br>";


//Challenge 2
$input= 5;
if ($input%2==0) {
    echo $input . " is an even number.";   
} else {
    echo $input . " is an odd number.";
}
echo "<br>";

//Challenge 3 
$start = 8;
echo "Starting number: " . $start;
echo "<br>";
echo "After incrementing: " . ++$start;
echo "<br>";
echo "After decrementing: " . --$start;
echo "<br>";

//Challenge 4
$grade = 89;
echo "Input: ". $grade;
echo "<br>";

if ($grade < 60) {
    echo "You got an F!";
} else if ($grade < 70) {
    echo "You got a D!";
} else if ($grade < 80) {
    echo "You got a C!";
} else if ($grade < 90) {
    echo "You got a B!";
} else if ($grade < 100) {
    echo "You got an A!";
}
echo "<br>";


//Challenge 5
$year = 2018;

if ($year % 4== 0) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}

 ?>
