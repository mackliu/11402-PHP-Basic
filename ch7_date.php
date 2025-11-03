<h1>日期與時間</h1>

<?php 

date_default_timezone_set("Asia/Taipei");

echo date("Y-m-d");
echo "<br>";
echo date("Y-m-j");
echo "<br>";
echo date("Y-m-d G:i:s");
echo "<br>";
echo date("Y-m-j h:i:s");
echo "<br>";
echo "<br>";

echo strtotime("2025-11-3");
echo "<br>";
echo strtotime("now");
echo "<br>";
echo strtotime("now")-strtotime("2025-11-3");

?>
<h2>給定兩個日期，計算中間間隔天數</h2>
<?php 
$day1='2025-10-03 01:1:22';
$day2='2025-10-30';

$day11=date("Y-m-d",strtotime($day1));
$day22=date("Y-m-d",strtotime($day2));


 $gap=(abs(strtotime($day11) - strtotime($day22)) /(60*60*24))-1;


echo $day1 . " 與 " . $day2 ."之間有".$gap."天" ;

?>

<h2>計算距離自己下一次生日還有幾天</h2>

<?php 
$birthday='1974-9-7';
echo "生日:".$birthday;
echo "<br>";
$t=date(date("Y")."-m-d",strtotime($birthday));
echo $t;
echo "<br>";

if(strtotime("now")>strtotime($t)){
 //今年生日已過
    $t=date("Y-m-d",strtotime("+1 year",strtotime($t)));   
}

$days=(abs(strtotime($t) - strtotime(date("Y-m-d"))) /(60*60*24))-1;




echo "距離下一次生日 $t 還有".$days."天";


?>