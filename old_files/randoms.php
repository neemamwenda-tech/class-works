<?php
declare(strict_types=1);
// $yob = 2003;
// $cYear = date("Y");
// $age = $cYear - $yob;
// $minAge = 16;
// echo "You are $age years old.";
// if($age< $minAge){
//     echo "You are young to join school";
// }else{
//     echo "You are old enough to join school";
// }
//function fruits($fruitname) {
//     echo "I love $fruitname<br>";
// }

// fruits("Mango");
// fruits("Apple");
// fruits("Banana");
// fruits("Grape");
// fruits("Orange");
// fruits("Pineapple");
// fruits("Strawberry");
// function myFriends($fname,$lname) {
//     echo "I have a friend called ".$fname." ".$lname."<br>";
// }
// myFriends("Viktor","Gyokeres");
// myFriends("Bukayo","Saka");
// myFriends("Christos","Tzolis");
// myFriends("David","Raya");
// myFriends("Gabriel","Magalhaes");
// function areaRectangle(float $length, float $width): float {
//     return $length * $width;
// }
// echo areaRectangle(5.0, 10.0);
// <!DOCTYPE html>
// <html>
// <head>
//     <title>Area of Rectangle</title>
// </head>
// <body>

//     <h2>Calculate Area of Rectangle</h2>

//     <form method="POST">
//         <label>Enter Length:</label>
//         <input type="number" name="length" step="0.01" required>
//         <br><br>

//         <label>Enter Width:</label>
//         <input type="number" name="width" step="0.01" required>
//         <br><br>

//         <input type="submit" name="calculate" value="Calculate Area">
//     </form>

//     <?php

//     function areaRectangle(float $length, float $width): float {
//         return $length * $width;
//     }

//     if (isset($_POST['calculate'])) {

//         $length = (float) $_POST['length'];
//         $width = (float) $_POST['width'];

//         $area = areaRectangle($length, $width);

//         echo "The area of the rectangle is: " . $area;
//     }

//     ?>

/ </body>
// </html>

<!-- // function areaRectangle(float $length, float $width): float {
//     return $length * $width;
// }

// ?>

// <form method="POST">
//     Length:
//     <input type="number" name="length">

//     <br><br>

//     Width:
//     <input type="number" name="width"> -->

//     <br><br>

//     <input type="submit" name="calculate" value="Calculate">
// </form>

// <?php

// if (isset($_POST['calculate'])) {
//     $length = (float) $_POST['length'];
//     $width = (float) $_POST['width'];

//     echo areaRectangle($length, $width);
// }





;

function areaRectangle(float $length, float $width): float {
    return $length * $width;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Area of Rectangle</title>
</head>
<body>

    <h2>Calculate Area of Rectangle</h2>

    <form method="POST">

        <label>Enter Length:</label>
        <input type="number" name="length" step="0.01" required>

        <br><br>

        <label>Enter Width:</label>
        <input type="number" name="width" step="0.01" required>

        <br><br>

        <input type="submit" name="calculate" value="Calculate Area">

    </form>

    <?php

    if (isset($_POST['calculate'])) {

        $length = (float) $_POST['length'];
        $width = (float) $_POST['width'];

        $area = areaRectangle($length, $width);

        echo "The area of the rectangle is: " . $area;
    }

    ?>

</body>
</html>