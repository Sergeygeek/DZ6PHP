<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <h3>Добро пожаловать в простое приложение <i>калькулятор</i></h3>
    <form action="" method="get">
        <p>
            <label>Первое число
                <input type="number" name="firstNum" placeholder="Введите число">
            </label>
        </p>
        <p>
            <label>Второе число
                <input type="number" name="secondNum" placeholder="Введите число">
            </label>
        </p>
        <p>
            <label>Выберите действие:</label>
            <select name="action" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>
        </p>
        <button type="submit" value="count">Посчитать</button>
    </form>

    <?php
    $firstNum = $_GET['firstNum'];
    $secondNum = $_GET['secondNum'];

    if($secondNum == 0){
        die ("На ноль делить нельзя!");
    }

    $operation = $_GET['action'];
    function sum($x,$y){
        $res = $x + $y;
        return $res;
    }
    function diff($x,$y){
        $res = $x - $y;
        return $res;
    }
    function mult($x,$y){
        $res = $x * $y;
        return $res;
    }
    function div($x,$y){
        $res = $x / $y;
        return $res;
    }

    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case "+":
                return sum($arg1, $arg2);
                break;
            case "-":
                return diff($arg1, $arg2);
                break;
            case "*":
                return mult($arg1, $arg2);
                break;
            case "/":
                return div($arg1, $arg2);
                break;
        }
    }

    $result = mathOperation($firstNum, $secondNum, $operation);

    echo "$firstNum $operation $secondNum" . " = " . "$result";

    ?>

</body>
</html>