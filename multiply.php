<?php

echo "สูตรคูณแม่ 6<br>";
for($num = 1; $num <= 12; $num++){
    echo "6 x ".$num." = ".($num*6);
    echo "<br>";
}
echo "<hr color='red'>";


echo "สูตรคูณแม่ 12<br>";

     $num1 = 1;

     while ($num1 <= 12) {
        echo "12 x ".$num1." = ".($num1*12);
        $num1++;
        echo "<br>";
    }
echo "<hr color='red'>";

echo "สูตรคูณแม่ 121<br>";
$num2 = 1;
do{
    echo "121 x ".$num2." = ".($num2*121);
    $num2++;
    echo "<br>";
}while ($num2 <= 12);

   
?>