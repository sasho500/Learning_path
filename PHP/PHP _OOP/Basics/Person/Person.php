<?php

class Person
{
    private $name;
    private $age;
    private $email;

    public function __construct($name, $age, $email = null)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setEmail($email);

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @throws Exception
     */
    public function setAge($age): void
    {
        if ($age > 100 || $age < 1) {
            throw new Exception("Invalid Age");
        }

        $this->age = $age;
    }

    /**
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed|null $email
     * @throws Exception
     */
    public function setEmail($email): void
    {


        if (strpos($email, "@") === false) {
            throw new Exception("Invalid  email");
        }

        $this->email = $email;
    }

    public function info_of_person()
    {
        return "Name: " . $this->getName() . " Age: " . $this->getAge() . " Email: " . $this->getEmail();
    }

}


if (key_exists('name', $_POST)) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $person = new Person($name, $age, $email);
    echo $person->info_of_person();
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
<form action="Person.php" method="post">

    <input name="name" placeholder="Name  of  the  person" type="text">
    <input name="age" placeholder="Age" type="text">
    <input name="email" placeholder="Enter email" type="text">
    <button>Submit</button>
</form>
</body>
</html>
