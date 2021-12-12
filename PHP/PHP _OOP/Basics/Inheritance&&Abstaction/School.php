<?php

//glavniq  klass(base)
class  School {

}

//shte  bude nasleden  ot  teachers  i  and students
class Classes {
    private $listOftheachers = [];

}

//shte  nasledi klas
class  Teacher {
    private $listOfdiscplines = [];

}

class Students {
    private $name;
    private $uniqueClassNumber;

}