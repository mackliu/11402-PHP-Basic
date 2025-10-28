<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
<?php

$a=[];



$a=[1=>"A",
    2=>"B",
    3=>"C",
'姓名'=>'劉勤永'];
print_r($a);
echo "<hr>";
$b=["A","B","C"];
print_r($b);


echo "<br>";
echo $a[3];
echo "<br>";
echo $a['姓名'];
echo "<br>";
echo $b[0];
?>
</body>
</html>