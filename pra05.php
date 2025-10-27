<style>
    * {
        font-family:'Courier New', Courier, monospace
    }
</style>

<h2>直角三角形</h2>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

?>
<h2>倒直角三角形</h2>
<?php
for($i=0;$i<5;$i++){
    for($j=5;$j>$i;$j--){
        echo "*";
    }
    echo "<br>";
}
?>
<h2>正三角型</h2>
<?php

for($i=0;$i<5;$i++){
     
    for($k=0;$k<4-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<2*$i+1;$j++){
        echo "*";
    }
    echo "<br>";
}


?>


&nbsp;&nbsp;&nbsp;&nbsp;*<br>
&nbsp;&nbsp;&nbsp;***<br>
&nbsp;&nbsp;*****<br>
&nbsp;*******<br>
*********<br>


<h2>矩形-挖空</h2>
<?php
for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        if($i==0 || $i==6 || $j==0 || $j==6){

            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>

<h2>菱形</h2>
<?php 

$x=10;
$y=0;

if($x%2==0){
    $x=$x+1;
}

for($i=0;$i<$x;$i++){
    if($i>floor($x/2)){
        $y=$y-1;
    }else{
        $y=$i;
    }
    //echo $i."-".$y;


    for($k=0;$k<floor($x/2)-$y;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<2*$y+1;$j++){
        echo "*";
    }
    echo "<br>";
}



?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



