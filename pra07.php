<h2>陣列練習-閏年與天干地支</h2>
<?php



$leap=[];
for($i=2025;$i<2524;$i++){
    if (($i % 4 == 0 && $i % 100 != 0) || $i % 400 == 0) {
        $leap[]=$i;
    }
}

echo "<pre>";
print_r($leap);
echo "</pre>";

$leap2=[];
for($i=2025;$i<2524;$i++){
    if (($i % 4 == 0 && $i % 100 != 0) || $i % 400 == 0) {
        $leap2[$i]=1;
    }
}
echo in_array(2029,$leap);


?>
<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>

<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>
<?php 
$nums=[];
while(count($nums)<6){
    $tmp=rand(1,38);
    if(!in_array($tmp,$nums)){
        $nums[]=$tmp;
    }
}
//print_r($nums);

?>
<style>

    /* background: 50%/cover no-repeat url(../images/bg/ball.svg);
    border-radius: 50px;
    display: block;
    font-size: 16px;
    font-weight: 700;
    height: 34px;
    letter-spacing: 1px;
    line-height: 34px;
    width: 34px */

.nums div{
    display:inline-block;
    margin: 0 5px;
    width: 28px;
    height:28px;
    border:1px solid #eeee;
    border-radius:50%;
    text-align:center;
    line-height:28px;
    background:radial-gradient(circle at 30% 30%, #fdedcaff, #ff9900ff);
    box-shadow:2px 2px 5px #ff9900ff;
} 
</style>
<?php 
echo "<div class='nums'>";
foreach($nums as $num){
    echo "<div>";
    echo $num;
    echo "</div>";
}
echo "</div>";
?>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
