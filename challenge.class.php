<?php

class ChallengeNumbers {

  function getNumber() {

    $ns=[];

    for($n=1; $n<=100; $n++) {

      $n1=$n % 3;
      $n5=$n % 5;
      $ns[] = ($n1 && $n5?$n:"").(!$n1 && !$n5?"Integraciones ":(!$n1?"Falabella ":(!$n5?"IT ":"")))."\n";

    }

    return $ns;

  }

}
