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
<style>
table{
    border-collapse:collapse;
    max-width:70%;
    min-width:500px;
    margin:10px auto;
}    
table td,table th{
    border:1px solid #999;
    padding:5px 10px;
    text-align:center;
}
table th{
    background:skyblue;
}
</style>
<h2>月曆製作提示</h2>
<?php 
$today=strtotime("now");
echo "今天是:".date("Y-m-d");
echo "<br>";
$targetDay=date("Y-m-d");
$Ttime=strtotime($targetDay);
$month=date("m",$Ttime);
echo "月份:".$month;
echo "<br>";
$firstDayMonth=date("Y-m-1",$Ttime);
echo "本月第一天:".$firstDayMonth;
echo "<br>";
$firstWeek=date("w",strtotime($firstDayMonth));
echo "<br>";
echo "這個月1號是星期:".$firstWeek;
echo "<br>";
$monthDays=date("t",$Ttime);
echo "這個月有 ".$monthDays."天";
echo "<br>";
$monthWeeks=ceil(($monthDays + $firstWeek)/7);
echo "這個月有 ".$monthWeeks." 周";
echo "<br>";
$tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));
echo "這個月曆第一格的日期為:". date("Y-m-d",$tableFirstDay);
echo "<br>";


//開始畫月曆
echo "<h2 style='text-align:center'>".$month."月";
echo "<table>";
echo "<tr>";
echo "<th>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th>六</th>";
echo "</tr>";


for($i=0;$i<$monthWeeks*7;$i++){

    if($i%7==0){
        echo "<tr>";
        echo "<td>";
        echo date("d" ,strtotime("+$i days",$tableFirstDay));
        echo "</td>";
    }else{
        echo "<td>";
        echo date("d" ,strtotime("+$i days",$tableFirstDay));
        echo "</td>";
    }

    if($i%7==6){
        echo "</tr>";
    }
    
}

echo "<table>";
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>