<?php

class Dog
{
    private $name;
    private $breed;


    public function __construct($name = null, $breed = null)
    {
        $this->name = $name;
        $this->breed = $breed;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }

    public function Bou()
    {

        return ($this->name ?? "empty") . " says bau";
    }
}


if (isset($_POST) && array_key_exists('name', $_POST)) {
    $name = $_POST['name'];
    $breed = $_POST['breed'];

    $dog_one = new Dog($name, $breed);


    $dog_two = new Dog();
    $dog_two->setName("Pesho");


    $dog_three = new Dog();

    $dogs = [$dog_one, $dog_two, $dog_three];

    foreach ($dogs as $dog) {
        echo $dog->Bou();
        echo "<br>";
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
<form action="Dogs.php" method="post">

    <input name="name" placeholder="Name  of  the  dog" type="text">
    <input name="breed" placeholder="Breed of  the  dog" type="text">
    <button>Submit</button>
</form>
</body>
</html>