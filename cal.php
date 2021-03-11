<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>Add</option>
            <option>Minus</option>
            <option>Multiply</option>
            <option>Divided</option>
        </select>
        <br>
            <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>The answer is: </p>
    <?php
        if (isset($_GET['submit']))
        {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch($operator)
            {
                case "Add":
                    echo $result1 + $result2;
                break;
                case "Minus":
                    echo $result1 - $result2;
                break;
                case "Multiply":
                    echo $result1 * $result2;
                break;
                case "Divided":
                    echo $result1 / $result2;
                break;
            }
        }
    ?>
</body>
</html>