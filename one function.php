<?php
function getpattern($n,$pattern_no)
{
 if($pattern_no=1)
 {
    
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

else if($pattern_no=2)
{
    $k = 2 * $n - 2;
  
    
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $k; $j++)
            echo " ";

        $k = $k - 1;
  
        for ($j = 0; $j <= $i; $j++ )
        {
              
            echo "* ";
        }

        echo "\n";
    }

    
}
else if($pattern_no=3){
    $num = 1;

    for ($i = 0; $i < $n; $i++)
    {
  
        for ($j = 0; $j <= $i; $j++ )
        {
              
            echo $num." ";
        }
          
            $num = $num + 1;
  
        echo "\n";
    }


}  
else{
    echo "enter number between 1 to 3";
}
   //driver code
}
$n=5;$pattern_no=2;
   getpattern($n,$pattern_no);
?>
