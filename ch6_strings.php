<style>
*{
    font-family:'Courier New', Courier, monospace;
}    
</style>

<h2>字串取代</h2>
<li>將”aaddw1123”改成”*********”</li>
<?php 
$str="aadasfddasasf123";

$newstr=str_replace(['aa','dd','w','11','23'],["**","**","*","**","**",],$str);

echo "原字串:".$str;
echo "<br>";
echo "取代後:".$newstr;


$str="aadsafbcdbvdaaxzzadasfddasasf123";

$base=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'u', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

$newstr=str_replace($base,'*',$str);
echo "<hr>";
echo "原字串:".$str;
echo "<br>";
echo "取代後:".$newstr;

$str="aadsaff123";

$newstr=str_repeat('*',mb_strlen($str));
echo "<hr>";
echo "原字串:".$str;
echo "<br>";
echo "取代後:".$newstr;

?>

<h2>字串分割</h2>

<li>將”this,is,a,book”依”,”切割後成為陣列</li>
<?php
$str='this,is,a,book';
$newstr=explode(",",$str);
echo "<pre>";
print_r($newstr);
echo "</pre>";
?>

<h2>字串組合</h2>

</li>將上例陣列重新組合成"this is a book"</li>
<?php

$combine=join(" ",$newstr);
echo "<hr>";
echo $combine;

?>


<h2>子字串取用</h2>

<li>將"The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…"</li>
<?php
$str="The reason why a great man is great is that he resolves to be a great man";
$pre=mb_substr($str,0,10);

echo $pre;
echo "...";

?>



<h2>尋找字串與HTML、css整合應用</h2>

<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>
<?php 
$str="學會python程式設計，薪水會加好多倍，工作會好找";
$keyword="程式設計";
$change="<span style='font-size:26px;color:red'>{$keyword}</span>";


$target=str_replace($keyword,$change,$str);
echo $target;

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>