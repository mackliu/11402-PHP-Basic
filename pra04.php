<h1>尋找字元(使用while)</h1>

<ul>
    <li>給定一個字串句子</li>
    <li>給定一個單字或字母</li>
    <li>尋找相符的內容</li>
    <li>印出尋找到的單字或字母所在句子中的位置</li>
</ul>

<?php
//41
$str="氣象署表示，今天（27日）東北季風影響，桃園以北及東半部地區有局部短暫雨，4縣市大雨特報，其他地區為多雲的天氣，午後中南部山區有局部短暫陣雨，白天南北溫差較大，明天天氣如何？氣象署指出，明天（28日） 東北季風影響，北台灣稍涼，其他地區早晚亦涼，本周天氣桃園以北易雨，秋意漸起。";
$search='季風';
/* mb_substr();
mb_strlen(); */

$pos=-1;
$count=0;
for($i=0;$i<mb_strlen($str)-mb_strlen($search)+1;$i++){
    $target=mb_substr($str,$i,mb_strlen($search));
    if($search==$target){
        $pos=$i;
        //break;
    }
    $count++;
}

echo "字串:".$str;
echo "<hr>";
echo "尋找:".$search;
echo "<hr>";
if($pos>=0){
    echo "找到的字串在原字串的第".$pos."位置";
}else{
    echo "找不到字串" . $search;
}
echo "<hr>";
echo "回圈次數".$count;

echo "<hr>";
echo "<hr>";

$pos=-1;
$count=0;

while($pos==-1 && $count<=mb_strlen($str)-mb_strlen($search)+1 ){
    $target=mb_substr($str,$count,mb_strlen($search));
    if($search==$target){
        $pos=$count;
        //break;
    }
    $count++; 
}



echo "字串:".$str;
echo "<hr>";
echo "尋找:".$search;
echo "<hr>";
if($pos>=0){
    echo "找到的字串在原字串的第".$pos."位置";
}else{
    echo "找不到字串" . $search;
}
echo "<hr>";
echo "回圈次數".$count;

echo "<hr>";
echo "<hr>";

echo mb_strpos($str,$search);