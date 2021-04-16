<?php

use PHPUnit\Framework\TestCase;

class challengetest extends TestCase {

  public function testReturnNumner() {

    require "challenge.class.php";
    $num=new ChallengeNumbers();
    $numbers=$num->getNumber();

    foreach ($numbers as $k=>$n) {

      if ($k==2) { // posicion 2 que es un 3
        $this->assertEquals("Falabella \n", $n);
      }

    }

  }

}
