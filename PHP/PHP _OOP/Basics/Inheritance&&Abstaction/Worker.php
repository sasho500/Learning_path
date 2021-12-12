<?php

abstract class Human {
    private $firstName;
    private $lastName;

    /**
     * @return mixed
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void {
        $this->lastName = $lastName;
    }
}

class Student extends Human {
    private $facultyNumber;

    /**
     * @return mixed
     */
    public function getFacultyNumber() {
        return $this->facultyNumber;
    }

    /**
     * @param mixed $facultyNumber
     * @throws Exception
     */
    public function setFacultyNumber($facultyNumber): void {
        $facultyNumber = "$facultyNumber";

        if(strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10) {
            throw new Exception('Invalid faculty number');
        }

        $this->facultyNumber = $facultyNumber;
    }
}

class Worker extends Human {
    private $weekSalary;
    private $workHoursPerDay;

    /**
     * @return mixed
     */
    public function getWeekSalary() {
        return $this->weekSalary;
    }

    /**
     * @param mixed $weekSalary
     */
    public function setWeekSalary($weekSalary): void {
        $this->weekSalary = $weekSalary;
    }

    /**
     * @return mixed
     */
    public function getWorkHoursPerDay() {
        return $this->workHoursPerDay;
    }

    /**
     * @param mixed $workHoursPerDay
     */
    public function setWorkHoursPerDay($workHoursPerDay): void {
        $this->workHoursPerDay = $workHoursPerDay;
    }

    public function moneyPerHour() {
        $dailySalary = $this->getWeekSalary() / 5;

        return $dailySalary / $this->getWorkHoursPerDay();
    }
}

$students = [];

for($i = 10; $i > 0; $i--) {
    $student = new Student();
    $student->setFacultyNumber($i + 10000);

    $students[] = $student;
}

usort($students, function(Student $a, Student $b) {
    if($a->getFacultyNumber() > $b->getFacultyNumber()) {
        return 1;
    }

    if($a->getFacultyNumber() < $b->getFacultyNumber()) {
        return -1;
    }

    return 0;
});

var_dump($students);