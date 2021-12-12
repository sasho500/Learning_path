<?php


//
if (key_exists('number', $_POST)) {


    $number = $_POST['number'];


    try {

       if (!is_numeric($number))
       {
           throw  new Exception("Invalid number");
       }

        echo sqrt($number);

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
<form action="Square_rot.php" method="post">

    <label>
        <input name="number" placeholder="enter number" type="text">
    </label>

    <button>Submit</button>
</form>
</body>
</html>

