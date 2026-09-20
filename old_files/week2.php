<?php 
/*$appName = "Calculator";
$fname = "Neema";
$sname = "Kendi";
$num1 = 36;
$num2 = 20;
(a variable must start with a $ sign followed by the name of the variable, a variable name must start with a letter or underscore character, a variable cannot start with a numerical character,a variable name can only contain alpha numeric charatcters (aA-zZ, 0-9) and underscore, variables are case sensitive($age and $AGE; are two different variables)for variables with two or more names must be joined by either an _ between the names or camel case($carName) variable names should be meaningful)

$results = $num1+$num2;

echo "<h2>$appName</h2>";

echo "The answer to ".$num1." + ".$num2." is ".$results;
echo "<br>";
echo "<br>";
echo "Your name is ";
echo $fname." ".$sname; */
//  $name = "Lydia";
//  $age = 22;

//  //A PROGRAM THAT HELPS A CLUB FILTER OUT PARTICIPANTS BY AGE

//  if($age>=18){
//     echo "Welcome to our event";
//  }else{
//     echo "You are still young for this program";
//  }

//A PROGRAM THAT ONLY ALLOWS PPLE OF AGE 20-30 TO BE ENROLLED IN MILLITARY PROGRAM

// $name = "Neema";
// $age = 3;
// if ($age >= 20 && $age <= 30){
//     echo "Welcome to the millitary";
// }else if($age>30){
//     echo "You are old to join the millitary";
// }else{
//     echo "You are too young to join the millitary";
// }

// $day = 11;
// switch($day){
//     case 1:
//         echo "Today is Monday";
//         break;
//     case 2:
//         echo "Today is Tuesday";
//         break;
//     case 3:
//         echo "Today is Wednesday";
//         break;
//     case 4:
//         echo "Today is Thursday";
//         break;
//     case 5:
//         echo "Today is Friday";
//         break;
//     case 6:
//         echo "Today is Saturday";
//         break;
//     case 7:
//         echo "Today is Sunday";
//         break;
//     default:
//         echo "No day found "; 
        
// }
// $studentName = "Philemon Mwenda";
// $registrationNumber = 220941;
// $course = "ICS";
// $marks = 85;

// if($marks >= 40 && <= 50){
//     echo "You have passed with a grade of D";
// }else if ($marks >= 51 && <= 60){
//     echo "You have passed with a grade of C";
// }else if ($marks >= 61 && <= 70){
//     echo "You have passed with a grade of B";
// }else if ($marks >= 71){
//     echo "You have passed with a grade of A";
// }else{
//     echo "You have failed";
// }

// $studentName = "Philemon Mwenda";
// $registrationNumber = 220941;
// $course = "ICS";
// $marks = 16;
// var_dump($marks);//to see and check inside the variable and see which type of varible is ; int, float
// var_dump($balance);

// if($marks>=70){
//     $grade = "A";
//     $message = "passed";    
// }else if ($marks>=60){
//     $grade = "B";
//     $message = "passed";
// }else if($marks>=50){
//     $grade = "C";
//     $message = "passed";
// }else if($marks>=40){
//     $grade = "D";
//     $message = "passed"; 
// }else{
//     $grade = "F";
//     $message = "failed"; 
// }
 //casting
//$y = 10;

//$y = (string) $y;
//var_dump($y);

//$c = "15 km";
//$c = (int) $c;
//var_dump($c);

//echo "The square root of 36 is: ".sqrt(36);

// 1. Arithmetic operators (+,-,/,*,%(gives the remainder),**)
// 2. Assignment(=, +=, -=, *=, /=, %=)
// 3. Comparison(==, ===, !=, !==, >,<, >=,<=)
// 4. Increment/Decrement(++$x(increment x before printing it )$x++)
// 5. Logical(and - &&, or - )
// 6. Conditional
// $z = 10;
// $m = 12;

// echo ++$z;
// echo "<br>";
// echo $m++;
// echo"<br>";
// echo $m;

// condtional statement
// 1.if
// 2.if....else
// 3.if....elseif....else
// 4.switch
// $weather = "rainy";

// if($weather=="rainy"){
//     echo "The weather is rainy, carry an umbrella";
//     }elseif($weather=="sunny"){
//         echo "The weather is $weather, wear light clothes";
//     }elseif($weather=="calm"){
//         echo"The weather is $weather, enjoy your day";
//     }
//     else{
//     echo "No advice found for the weather pattern $weather!";
//     } 


    //create a simple php program that checks the type of event and weather pattern and then advice you on the  clothes to put on 

// $event = "wedding";
// $weather = "rainy";

// $advice = "";

// switch ($weather) {
//     case "sunny":
//         $advice .= "Wear light, breathable clothing and sunglasses. ";
//         break;
//     case "rainy":
//         $advice .= "Carry an umbrella. ";
//         break;
//     case "cold":
//         $advice .= "Wear a warm coat, scarf, and gloves. ";
//         break;
//     case "windy":
//         $advice .= "Avoid loose accessories. ";
//         break;
//     case "snowy":
//         $advice .= "Wear a heavy coat and boots. ";
//         break;
//     default:
//         $advice .= "Weather condition unclear, dress comfortably. ";
// }


// if ($event == "wedding") {
//     $advice .= "Go formal — a suit or an elegant dress.";
// } elseif ($event == "office") {
//     $advice .= "Wear business casual attire for the office.";
// } elseif ($event == "gym") {
//     $advice .= "Sportswear and trainers are good for the gym.";
// } elseif ($event == "beach") {
//     $advice .= "Swimwear or shorts and a t-shirt work best for the beach.";
// } elseif ($event == "casual outing") {
//     $advice .= "Since it's a casual outing, jeans and a comfortable top are fine.";
// } else {
//     $advice .= "For this event, dress according to comfort and occasion.";
// }

// echo "Event: $event";
// echo "<br>";
// echo "Weather: $weather";
// echo "<br>";
// echo "Advice: $advice";


// 



// $num1 = 16;
// $num2 = -25;
// $num3 = 4.7;
// $num4 = 10;
// $num5 = 3;

// echo " Basic Math Functions ";
// echo"<br>";
// echo"<br>";
// // abs() - absolute value
// echo "Absolute value of $num2: " . abs($num2) . "\n";

// echo"<br>";
// echo"<br>";
// // ceil() - round up
// echo "Ceil of $num3: " . ceil($num3) . "\n";

// echo"<br>";
// echo"<br>";
// // floor() - round down
// echo "Floor of $num3: " . floor($num3) . "\n";

// echo"<br>";
// echo"<br>";
// // round() - round to nearest
// echo "Round of $num3: " . round($num3) . "\n";
// echo"<br>";
// echo "Round of 3.14159 to 2 decimals: " . round(3.14159, 2) . "\n";
// echo"<br>";
// echo"<br>";
// echo "\nPowers and Roots\n";
// echo"<br>";
// // pow() - power
// echo "$num4 to the power of $num5: " . pow($num4, $num5) . "\n";
// echo"<br>";
// echo"<br>";
// // sqrt() - square root
// echo "Square root of $num1: " . sqrt($num1) . "\n";
// echo"<br>";
// echo"<br>";
// echo "Division ";
// echo"<br>";
// // intdiv() - integer division
// echo "Integer division of $num4 by $num5: " . intdiv($num4, $num5) . "\n";
// echo"<br>";
// // fmod() - modulus for floats
// echo "Float modulus of $num4 by $num5: " . fmod($num4, $num5) . "\n";
// echo"<br>";
// echo"<br>";
// echo " Min and Max ";
// echo"<br>";
// // min() and max()
// echo "Minimum of $num1, $num2, $num4: " . min($num1, $num2, $num4) . "\n";
// echo"<br>";
// echo "Maximum of $num1, $num2, $num4: " . max($num1, $num2, $num4) . "\n";
// echo"<br>";
// echo"<br>";
// echo "Random Numbers";
// echo"<br>";
// // rand() - random number between range
// echo "Random number between 1 and 100: " . rand(1, 100) . "\n";
// echo"<br>";
// echo"<br>";
// echo " Constants ";
// echo"<br>";
// // M_PI - value of pi
// echo "Value of PI: " . M_PI . "\n";
// echo"<br>";
// echo"<br>";
// echo "\nNumber Formatting\n";
// echo"<br>";
// // number_format() - format numbers with commas/decimals
// $bigNumber = 1234567.891;
// echo "Formatted number: " . number_format($bigNumber, 2) . "\n";
// echo"<br>";
// echo"<br>";
// echo "\nBase Conversions\n";
// echo"<br>";
// // decbin(), bindec(), dechex(), hexdec()
// echo "10 in binary: " . decbin(10) . "\n";
// echo"<br>";
// echo "1010 in decimal: " . bindec("1010") . "\n";
// echo"<br>";

// echo "255 in hexadecimal: " . dechex(255) . "\n";
// echo"<br>";
// echo "ff in decimal: " . hexdec("ff") . "\n";

// ---------- FUNCTION ----------
// A reusable block of code that checks if a player qualifies
// Takes 3 parameters and returns a string result
// function checkPlayer($continent, $position, $foot) {

//     // ---------- NESTED IF ----------
//     // Each condition only gets checked if the one before it passes
//     if ($continent == "African") {

//         if ($position == "Midfielder") {

//             if ($foot == "Left") {
//                 return "Selected!";       // all 3 conditions passed
//             } else {
//                 return "Rejected - not left-footed.";
//             }

//         } else {
//             return "Rejected - not a Midfielder.";
//         }

//     } else {
//         return "Rejected - not African.";
//     }
// }

// // ---------- FOR LOOP ----------
// // Prints a simple countdown 5 times, using a counter
// echo "----- FOR loop: Countdown -----\n";
// for ($i = 5; $i >= 1; $i--) {
//     echo "T-minus $i\n";
// }

// // ---------- WHILE LOOP ----------
// // Checks condition BEFORE running; may run zero times if false from the start
// echo "\n----- WHILE loop: Counting up -----\n";
// $count = 1;
// while ($count <= 3) {
//     echo "While count: $count\n";
//     $count++;   // must increase, or this loop never ends
// }

// // ---------- DO...WHILE LOOP ----------
// // Checks condition AFTER running; always runs at least once
// echo "\n----- DO...WHILE loop -----\n";
// $tries = 10;   // condition is already false here (10 is not <= 3)
// do {
//     echo "This still runs once, even though tries = $tries\n";
// } while ($tries <= 3);

// // ---------- FOREACH LOOP + FUNCTION CALL ----------
// // Loops through an array of players and calls checkPlayer() on each one
// echo "\n----- FOREACH loop: Checking players -----\n";

// $players = [
//     ["continent" => "African", "position" => "Midfielder", "foot" => "Left"],
//     ["continent" => "European", "position" => "Midfielder", "foot" => "Left"],
//     ["continent" => "African", "position" => "Forward",    "foot" => "Left"],
//     ["continent" => "African", "position" => "Midfielder", "foot" => "Right"],
// ];

// foreach ($players as $index => $player) {
//     // Call the function defined above, passing in each player's details
//     $result = checkPlayer($player["continent"], $player["position"], $player["foot"]);
//     echo "Player " . ($index + 1) . ": $result\n";
// }



?>

<!-- 
<!DOCTYPE html>
// <html lang ="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport"
//     content="width=device-width, intial-scale=1.0">
    
//     <title>Student system</title>
// </head>

// <body>



//     <p>Student Name: <?php echo $studentName; ?></p>
//     <p>Registration Number: <?php echo $registrationNumber; ?></p>
//     <p>Course: <?php echo $course; ?></p>
//     <p>Marks: <?php echo $marks; ?></p>
//     <p>Status: <?php echo $message;?></p>

//     </body>
// </html> -->


