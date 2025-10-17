<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if 選擇結構</title>
</head>
<body>
<?php 

$score=99;

if($score>=60){
    //true
    echo "及格";
}else{
    //false
    echo "不及格";
}

$result=($score>=60)?'及格':'不及格';

echo  ($score>=60)?'及格':'不及格';
echo "<hr>";
$score=50;
if($score>0 && $score<=59){
    $level="E";
}else if($score>=70 && $score<=79){
    $level="C";
}else if($score>=80 && $score<=89){
   $level="B";
}else if($score>=60 && $score<=69){
   $level="D";
}else if($score>=90 && $score<=100){
    $level="A";
}
echo $level;

echo "<hr>";
$score=120;

if($score>=0 && $score<=59){
    $level="E";
}else if($score<=69){
    //<0 or >=60
    $level="D";
}else if($score<=79){
    $level="C";
}else if($score<=89){
    $level="B";
}else if($score<=100){
    $level="A";
}else{
    $level="分數錯誤";
}
echo $level;


echo "<hr>";
$score=110;

if($score<0 || $score>100){
    echo  "分數錯誤";
    echo "YES";
    exit();
}



if($score<=59){
    echo  "E";
    exit();
}
if($score<=69){
    echo  "D";
    exit();
}
if($score<=79){
    echo  "C";
    exit();
}
if($score<=89){
    echo  "B";
    exit();
}
if($score<=100){
    echo  "A";
    exit();
}

echo "<hr>HIHI";
if($score>=0 && $score<=59){
    $level="E";
}else if($score<=69){
    //<0 or >=60
    $level="D";
}else if($score<=79){
    $level="C";
}else if($score<=89){
    $level="B";
}else if($score<=100){
    $level="A";
}else{
    $level="分數錯誤";
}
echo $level;

?>
</body>
</html>