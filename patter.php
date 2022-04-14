 

<?php
// pattern 1
$i=0;
while($i<=5){
    $j=0;
    while($j<=$i){
        echo"*";
        $j++;
      }
echo"<br>";
$i++;
}

echo"<br>";
// pattern 2 


$num = 1;
    for ($i = 0; $i < 5; $i++)
    {
        for ($j = 0; $j <= $i; $j++ )
        {
            echo "$num";
        }
            $num = $num + 1;
        echo "<br>";
    }
 

    // pattern 3 

    echo "<br>";
 $i=0;    
do{ 
  $j=0;
  while($j<=$i){
    echo"*";
    $j++;   
  } 
echo "<br>";    
$i++;    
}while($i<=5);  
for($i=5; $i>=1; $i--){   
for($j=1; $j<=$i; $j++){  
echo "*";   
}   
echo "<br>";   
}   
