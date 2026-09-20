<?php
declare(strict_types=1);

function areaRectangle(float $length, float $width): float
{
    return $length * $width;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $length = (float) $_POST['length'];
    $width = (float) $_POST['width'];

    echo "The area of the rectangle is = " . areaRectangle($length, $width);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
</head>

<body>

<h2>Rectangle Area </h2>

<form method="post">

    Length:
    <input type="text" name="length">

    <br><br>

    Width:
    <input type="text" name="width">

    <br><br>

    <input type="submit" value="Calculate">

</form>
</body>

</html>