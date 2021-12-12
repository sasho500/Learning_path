<?php

class DistanceCalculator
{






    public static function calculate_the_distance(array $one,array $two)
    {
      return sqrt((($two[0]-$one[0])<<1)+(($two[1]-$one[1])<<1)+(($two[2]-$one[2])<<1));

    }


}
$one=array(0,0,0);
$two=array(1,2,3);
echo DistanceCalculator::calculate_the_distance($one, $two);