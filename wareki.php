<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>練習問題</title>
</head>
<body>
<?php
    $name=$_REQUEST['myname'];
    $size=$name;
    $meizi=1867;
    $tai=1911;
    $syo=1925;
    $hei=1988;
    $rei=2018;
    print "{$name}は";
?>
<?php
    if($size<=1867){
        print "明治以前です<br>";
    }else if($size>=1868 && $size<=1911){
        $A=($name-$meizi);
        print"明治$A 年 です<br>";
    }else if($size>=1912 && $size<=1925){
        $B=($name-$tai);
        print"大正$B です<br>";
    }else if($size>=1926 && $size<=1988){
        $C=($name-$syo);
        print"昭和$C 年 です<br>";
    }else if($size>=1989 && $size<=2018){
        $D=($name-$hei);
        print"平成$D 年 です<br>";
    }else{
        $G=($name-$rei);
        print"令和$G 年です<br>";
    }
?>
</body>