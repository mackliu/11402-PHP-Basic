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



  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
