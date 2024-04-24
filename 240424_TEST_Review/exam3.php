<?php

//사각형, 삼각형 넓이 구하는 함수 

function combineXY($height, $weight){
    return $height * $weight;
}

function combineXY2($height, $lenth){
    return 0.5 * $height * $lenth; 
}

echo "사각형의 넓이는 : " . combineXY(3, 5);
echo '<br>';
echo "삼각형의 넓이는 : " . combineXY2(7, 3);


?>

