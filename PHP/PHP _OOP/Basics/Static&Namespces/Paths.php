<?php

class DistanceCalculator
{
    /**
     *
     * @var DistanceCalculator
     */




    public static function calculate_the_distance(array $one, array $two)
    {
        return sqrt((($two[0] - $one[0]) << 1) + (($two[1] - $one[1]) << 1) + (($two[2] - $one[2]) << 1));

    }


}

class Storage
{
    /**
     *
     * @var Storage
     */

    private static $path1;






    /**
     * @return mixed
     */
    public static function getPath1()
    {
        return self::$path1;
    }

    /**
     * @param mixed $path1
     */
    public static function setPath1($path1): void
    {
        self::$path1 = $path1;
    }

    public static function read(): void
    {

        $myfile = fopen(self::getPath1(), "r") or die("Unable to open file!");
        echo fread($myfile, filesize(self::getPath1()));
        fclose($myfile);

    }

    public static function write(): void
    {

        $myfile = fopen(self::getPath1(), "w") or die("Unable to open file!");
        $text = " lalaa";
        fwrite($myfile, $text);
        fclose($myfile);

    }

}

$one = array(0, 0, 0);
$two = array(1, 2, 3);
$d = DistanceCalculator::calculate_the_distance($one, $two);
echo $d;
$path = "text.txt";
$try = Storage::setPath1($path);
echo Storage::getPath1();
echo "<br>";
echo Storage::read();
echo "<br>";
Storage::write();
echo "<br>";
echo Storage::read();
echo "<br>";