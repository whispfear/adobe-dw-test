<?php

$grades = array( "A" => "Good",
                 "B" => "Satisfactory",
                 "C" => "OK",
                 "D" => "Bad",
                 "F" => "Fail");

$g = readline("Enter your grade ? ");
print "Remark : " . $grades[$g] . "\n";

?>