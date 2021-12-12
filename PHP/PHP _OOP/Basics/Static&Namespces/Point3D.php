<?php

class Point3D
{
    private  static  $start_coordinates;
    private $new_coordinates;

    public function __construct(array $all_coordinates)
    {

        $this->setNewCoordinates($all_coordinates);
        self::setStartCoordinates();
    }

    /**
     * @return readonly``
     */
    public static function getStartCoordinates()
    {
        return self::$start_coordinates;
    }

    /**
     * @param int[]|readonly $start_coordinates
     */
   private static function setStartCoordinates(): void
    {
        self::$start_coordinates = array(0, 0, 0);
    }

    /**
     * @return mixed
     */
    public function getNewCoordinates()
    {
        return $this->new_coordinates[0].",".$this->new_coordinates[1].','.$this->new_coordinates[2];
    }

    /**
     * @param mixed $new_coordinates
     */
    public function setNewCoordinates($new_coordinates): void
    {
        $this->new_coordinates = $new_coordinates;
    }

    public  function string()
    {
      $star_coordinates=self::$start_coordinates;
        return $this->getNewCoordinates()." starting point=".$star_coordinates[0];
    }



}

if (array_key_exists('coordinateX', $_POST)) {
    $coordinateX = $_POST['coordinateX'];
    $coordinateY = $_POST['coordinateY'];
    $coordinateZ = $_POST['coordinateZ'];
    $all_coordinates = array($coordinateX, $coordinateY, $coordinateZ);

    $d = new  Point3D($all_coordinates);
     echo $d->string();


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
<form action="Point3D.php" method="post">

    <input name="coordinateX" placeholder=" coordinateX" type="text">
    <input name="coordinateY" placeholder=" coordinateY" type="text">
    <input name="coordinateZ" placeholder=" coordinateZ" type="text">


    <button>Submit</button>
</form>

<table class="table">
    <tr>
        <th colspan="2" class="firstLine"> Point3D</th>
    </tr>
    <tr>
        <th>model</th>
        <th><?php echo $laptop->getModel(); ?></th>


</table>


</body>
</html>


