<?php

echo "*-*-*-*-*--*-*-*-*-*--*-*-*-*-*-*-*-*-*-*-*-*- \n";
echo "----------Convertidor números romános------------ \n";
echo "*-*-*-*-*--*-*-*-*-*--*-*-*-*-*-*-*-*-*-*-*-*- \n\n";

echo romanEncoder(4) . "\n";
echo romanEncoder(999) . "\n";
echo romanEncoder(49) . "\n";
echo romanEncoder(1019) . "\n";

function romanEncoder($int)
{
    $romanArray = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1,
    );
    $result = '';

    while($int > 0)
    {
        foreach($romanArray as $romanNumber=>$value)
        {
            if($int >= $value)
            {
                $int -= $value;
                $result .= $romanNumber;
                break;
            }
        }
    }
    return $result;
}
