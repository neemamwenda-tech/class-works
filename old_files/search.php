<!-- <?php
 if ($_SERVER["REQUEST_METHOD"] === 'GET') {
    $query = trim($_GET['q']);

    if($query===""){
        $res = "<span style='color: red;'>Type something to search......</span>";
    }else{
        $res= "<span style='color: green;'>You are searching for the query.... <b>$query</b></span>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Searching....</title>
</head>
<body>
    <form action="" method="get">
       <label> Type your key word:</label>
       <input type="text" name="q" >
         <button type="submit">Search</button>

         <p> <?php echo $res; ?></p>
    </form>
</body>
</html> -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $operator = $_POST["operator"];

    if ($operator == "+") {
        $result = $num1 + $num2;
    } 
    elseif ($operator == "-") {
        $result = $num1 - $num2;
    } 
    elseif ($operator == "*") {
        $result = $num1 * $num2;
    } 
    elseif ($operator == "/") {
        if ($num2 == 0) {
            $result = "Cannot divide by zero";
        } else {
            $result = $num1 / $num2;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="POST">

    <input type="number" name="number1" required>

    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="number" name="number2" required>

    <button type="submit">Calculate</button>

</form>

<?php
if (isset($result)) {
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>