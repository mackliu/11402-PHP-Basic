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