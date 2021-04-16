<?php

include "challenge.class.php";

$challenge=new ChallengeNumbers();
$numbers=$challenge->getNumber();

print_r($numbers);

foreach ($numbers as $n) {
  echo $n;
}
