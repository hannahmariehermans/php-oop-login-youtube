<?php
    declare(strict_types=1);
    include ('includes/class-autoload.inc.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>11: First Excercise OOP PHP</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <p>My own calculator!</p>
        <input type="number" name="num1" placeholder="First number"
        <label>
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>
        </label>
        <input type="number" name="num2" placeholder="Second number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>
