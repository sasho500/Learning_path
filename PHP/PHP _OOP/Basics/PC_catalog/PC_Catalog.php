<?php


if (key_exists('model', $_POST)) {
    $model = $_POST['model'];
    $manufacturer = $_POST['manufacturer'];
    $processor = $_POST['processor'];
    $ram = $_POST['ram'];
    $graphics_card = $_POST['graphics_card'];
    $hdd = $_POST['hdd'];

    $price = $_POST['price'];



    //model, manufacturer, processor, RAM, graphics card, HDD, screen, battery, battery life in hours and price.

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
    <style>

        table, td, th {
            border: 1px solid black;
            width: 30%;
        }

        table {
            width: 50%;
            border-collapse: collapse;
        }

        .firstLine {
            border: 0px;
            text-align: center;

            display: table-cell;
            vertical-align: inherit;

            margin-left: ;
            margin-right: ;

        }
    </style>
</head>
<body>
<form action="PC_Catalog.php" method="post">

    <input name="model" placeholder="Model" type="text">
    <input name="manufacturer" placeholder="manufacturer" type="text">
    <input name="processor" placeholder="processor" type="text">
    <input name="ram" placeholder="RAM" type="text">
    <input name="graphics_card" placeholder="graphics card" type="text">
    <input name="hdd" placeholder="HDD" type="text">

    <input name="price" placeholder="price" type="text">

    <button>Submit</button>
</form>

<table class="table">
    <tr>
        <th colspan="2" class="firstLine">Catalog:</th>
    </tr>
    <tr>
        <th>model</th>
        <th><?php echo $laptop->getModel(); ?></th>

    </tr>

    <tr>
        <th>manufacturer</th>
        <th><?php echo $laptop->getManufacturer(); ?></th>

    </tr>
    <tr>
        <th>processor</th>
        <th><?php echo $laptop->getProcessor(); ?></th>

    </tr>
    <tr>
        <th>RAM</th>
        <th><?php echo $laptop->getRam(); ?></th>

    </tr>
    <tr>
        <th>graphics card</th>
        <th><?php echo $laptop->getGraphicsCard(); ?></th>

    </tr>
    <tr>
        <th>HDD</th>
        <th><?php echo $laptop->getHdd(); ?></th>

    </tr>


    <tr>
        <th>Total price</th>
        <th><?php echo $laptop->getScreen(); ?></th>

    </tr>


</table>


</body>
</html>

