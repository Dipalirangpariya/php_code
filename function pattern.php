<?php
// pattern 1
;
function getpattern1($n){
while($i<=$n){
    $j=0;
    while($j<=$i){
        echo"*";
        $j++;
      }
echo"<br>";
$i++;
}

echo"<br>";
}
//driver code
$n=5;
getpattern1($n);


//pattern 2


function getpattern2($n){
    $num = 1;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j <= $i; $j++ )
        {
            echo "$num";
        }
            $num = $num + 1;
        echo "<br>";
    }
}
$n=5;
getpattern2($n);


//pattern 3


function getpattern3($n){
$i=0;    
do{ 
  $j=0;
  while($j<=$i){
    echo"*";
    $j++;   
  } 
echo "<br>";    
$i++;    
}
while($i<=$n);  
for($i=$n; $i>=1; $i--){   
for($j=1; $j<=$i; $j++){  
echo "*";   
}   
echo "<br>";   
}   
 
}
// Driver code
$n=5;
getpattern3($n);