<?php
 include_once "app/Calculator.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Caculator</legend>
        <table>
            <tr>
                <td>Firt operand:</td>
                <td><input type="number" name="number1"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td><select name="operator" id="">
                        <option value="plus">Plus</option>
                        <option value="minus">Minus</option>
                        <option value="multiply">Multiply</option>
                        <option value="division">Division</option>
                    </select></td>
            </tr>
            <tr>
                <td>Second operator:</td>
                <td><input type="number" name="number2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Caculator"></td>
            </tr>
        </table>
        <h2>Result:</h2>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $operator = $_POST["operator"];

            $calculator = new \App\Calculator();
            echo $calculator->calculator($operator, $number1, $number2);
        }

        ?>

    </fieldset>
</form>
</body>
</html>