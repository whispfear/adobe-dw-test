<?php

 $a = 1;
  function test(){
    global $a;
    echo $a;
}

test();
?>

<?php
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
    echo $b;
    
} 

Sum();

echo $b;
?>

<?php
$a = 1;
$b = 2;

function Sum1()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum1();
echo $b;
?>


 
