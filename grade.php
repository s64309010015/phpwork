<?php

    $score = $_GET['score'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบ</title>
</head>
<body bgcolor="#BBBBBB"><br><br><br><br><br><br><br><br><br><br>
<div class="container" align="center">
<table cellspacing="8" cellpadding="8" style=" border:2px DASHED #62A2A2;background-color: #62A2A2" width=470><tbody><tr><td align="center" valign="middle" style="background-color: #7BB0B0"><table border="0" cellspacing="8" cellpadding="8" width=470 style=" background-color: #95BFBF"><tbody><tr><td align="center" style=" border:2px DASHED #B8D3D3;background-color: #B8D3D3"><font size=2><font size="50" color="green">
<br><br><br>
<?php
    if($score >= 90){
        echo "คุณได้ A+";
    }elseif($score >= 80){
        echo "คุณได้ A";
    }elseif($score >= 75){
        echo "คุณได้ B+";
    }elseif($score >= 70){
        echo "คุณได้ B";
    }elseif($score >= 65){
        echo "คุณได้ C+";   
    }elseif($score >= 60){ 
        echo "คุณได้ C";
    }elseif($score >= 55){
        echo "คุณได้ D+";
    }elseif($score >= 50){
        echo "คุณได้ D";
    }else{
        echo " ติด F";
    }
?>

</div>
</body><br><br><br><br>
</html>
