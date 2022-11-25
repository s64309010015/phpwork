<?php

    function displayName(){
        echo "Fatimoh Mayutae";
    }
    echo "My Name is ";
    displayName();

    echo "<hr color='red'>";

    function addNumber($num1,$num2){
      echo $num1 + $num2;
    }
    addNumber(2,4);

    echo "<hr color='blue'>";

    function displayStudent($name){
        echo $name;
    }
    displayStudent("Fatimoh");
    
    echo "<hr color='green'>";

    function powerNumber($num,$pow){
        echo $num**$pow;
    }
    powerNumber(10,5);

    echo "<hr color='gray'>";

    function fractionNumber($numerate,$denomerate){
        echo $numerate % $denomerate;
    }
    fractionNumber(17,9);
?>