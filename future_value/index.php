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
        <legend>Future Value Caculator</legend>
        <table>
            <tr>
                <td>Inventment Amount: </td>
                <td><input type="number" name="money"></td>
            </tr>
            <tr>
                <td>Yearly Interest Rate:</td>
                <td><input type="number" name="interestRate"></td>
            </tr>
            <tr>
                <td>Number of Years:</td>
                <td><input type="number" name="years"></td>
            </tr>
        </table>
        <input type="submit" value="Check">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $money = $_POST["money"];
            $interest = $_POST["interestRate"];
            $year = $_POST["years"];
            $value = $money;

            for ($i = 1; $i < $year; $i++) {
                $money = $money + ($money * ($interest/100));

            }
            echo $value ."----".$money;

        }


        ?>


    </fieldset>
</form>
</body>
</html>