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





<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>