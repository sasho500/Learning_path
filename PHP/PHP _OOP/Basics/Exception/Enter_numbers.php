<?php
static $arrayOfNumbers = [];

function readNumber($number, $number2) {
    global $arrayOfNumbers;
    is_numeric($number) or die("Invalid number");
    is_numeric($number2) or die("Invalid number23");
    if ($number2 < 0 || $number < 0) {
        throw  new Exception("Invalid numbers");
    }

    for ($i = 0; $i < 10; $i++) {
        $nextNumber = $number + $i;
        if ($nextNumber > $number2) {
            break;
        }
        $arrayOfNumbers[] = $nextNumber;

    }

    var_dump($arrayOfNumbers);
}


if (key_exists('number', $_POST)) {


    $number = $_POST['number'];
    $number2 = $_POST['number2'];


    try {

//        if (!is_numeric($number)) {
//            throw  new Exception("Invalid number");
//        }
        readNumber($number, $number2,);


    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "<br>";
        echo "Good bye";
    }

}
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
<form action="Enter_numbers.php" method="post">

    <label>
        <input name="number" placeholder="enter number" type="text">
        <input name="number2" placeholder="enter number" type="text">
    </label>

    <button>Submit</button>
</form>
</body>
</html>

