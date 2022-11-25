<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์ที่ได้</title>
</head>
<body style="background-color: #9999FF;"><br><br><br><br><br><br><br><br><br><br>
<div class="container" align="center">
<table cellspacing="8" cellpadding="8" style=" border:2px DASHED #62A2A2;background-color: #62A2A2" width=470><tbody><tr><td align="center" valign="middle" style="background-color: #7BB0B0"><table border="0" cellspacing="8" cellpadding="8" width=470 style=" background-color: #95BFBF"><tbody><tr><td align="center" style=" border:2px DASHED #B8D3D3;background-color: #B8D3D3"><font size=2><font size="50" color="green">
<h3>ผลลัพธ์ที่ได้</h3>
<br>
<?php  
switch ($op){
    case '+':
        function addNumber($num1,$num2){
            echo  $num1 + $num2;
            }
            echo addNumber($num1,$num2);
        break;
    case '-':
        function minusNumber($num1,$num2){
            echo  $num1 - $num2;
            }
            echo minusNumber($num1,$num2);
        break;
    case 'x':
        function multipleNumber($num1,$num2){
            echo  $num1 * $num2;
            }
            echo multipleNumber($num1,$num2);
        break;
    case '/':
        function divideNumber($num1,$num2){
            echo  $num1 / $num2;
            }
            echo divideNumber($num1,$num2);
        break;
    case 'xX':
        function powerNumber($num1,$num2){
            echo  $num1 ** $num2;
            }
            echo powerNumber($num1,$num2);
        break;


        default:
            function modulNumber($num1,$num2){
            echo $num1 % $num2;
            }
            modulNumber($num1,$num2);

    }
?>
</div>
</body><br><br><br><br>
</html>
