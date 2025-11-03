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

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>

<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php 
echo date("Y/m/d");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("Y-n-j G:i:s");
echo "<br>";
echo "今天是西元".date("Y年m月d日")." ".((date("N")>=6)?"假日":"上班日");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



?>




<h2>利用迴圈來計算連續五個周一的日期</h2>
例:

<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>