<?php


// define what you know
trait Identifiable {
    private $uniqueId;

    /**
     * @return mixed
     */
    public function getUniqueId() {
        return $this->uniqueId;
    }

    /**
     * @param mixed $uniqueId
     */
    private function setUniqueId($uniqueId): void {
        $this->uniqueId = $uniqueId;
    }
}

trait Schoolable {
    private $details;

    /**
     * @return mixed
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details): void {
        $this->details = $details;
    }
}

trait HasName {
    private $name;

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }
}

class SchoolClass {
    use Identifiable,
        Schoolable;

    private $listOftheachers = [];

    public function __construct() {
        $this->setUniqueId(uniqid('scl_'));
    }

    /**
     * @return array
     */
    public function getListOftheachers(): array {
        return $this->listOftheachers;
    }

    /**
     * @param array $listOftheachers
     */
    public function setListOftheachers(array $listOftheachers): void {
        $this->listOftheachers = $listOftheachers;
    }
}

// logic

class  Teacher extends Person {
    use Schoolable;

    private $listOfdiscplines = [];

    /**
     * @return array
     */
    public function getListOfdiscplines(): array {
        return $this->listOfdiscplines;
    }

    /**
     * @param $listOfdiscplines
     */
    public function setDiscplines($listOfdiscplines): void {
        $this->listOfdiscplines[] = $listOfdiscplines;
    }

}

class Student extends Person {
    use Identifiable,
        Schoolable;

    public function __construct() {
        $this->setUniqueId(uniqid('stud_'));
    }
}

class Person {
    use HasName;
}

class Discipline {
    use HasName;

    private $lecturesCount;
    private $students = [];

    /**
     * @return mixed
     */
    public function getLecturesCount() {
        return $this->lecturesCount;
    }

    /**
     * @param mixed $lecturesCount
     */
    public function setLecturesCount($lecturesCount): void {
        $this->lecturesCount = $lecturesCount;
    }

    /**
     * @return array
     */
    public function getStudents(): array {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents(array $students): void {
        $this->students = $students;
    }
}

// result
$teacher = new Teacher();
$teacher->setName('Pesho Daskala');
$teacher->setDetails('Prepodava za bubini');

$student = new Student();
$student->setName('Goshko');
$student->setDetails('golqm dvoikadjiq');

$schoolClass = new SchoolClass();
$schoolClass->setDetails('12b klas nai gotiniq');

$discipline = new Discipline();
$discipline->setName('Matematika');
$discipline->setLecturesCount(100);
$discipline->setStudents([$student]);

//$teacher->setListOfdiscplines([$discipline]);