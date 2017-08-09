<?php print "the world population is: ";
  print number_format(3456768948);
?>
	Five plus five is:
<?php print 5 + 5; ?>
  <p>
  Four plus four is:
<?php
  print 4 + 4;
?>
  <p>
  <img src="vacation.jpg" alt="My Vacation" />
<?php
  print "Hello";
  print " World!";
?>
<?php
  $s = ['shaz' => 10, 'zayu' => 20, 'taha' => 30];
  echo $s['shaz'], $s['zayu'], $s['taha'];
?>
<?php
  $a = ['a','b','c'];
  echo "$a[0], $a[1], $a[2]";
  $b = range(1, 10);
  foreach($b as $s){
    echo $s." ";
}
  $c = range(1, 10, 2);
  echo "$c[0], <br> $c[1] <br>";
  $d = range('a','z');
  for($i=0; $i < 10; $i++){
   echo $d[$i];
}
?>
