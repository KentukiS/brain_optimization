<?php
    function getFibonacciSumm($fibCount) {
        if ($fibCount == 0 ) return 0; 
        if ($fibCount == 1 || $fibCount == 2) { 
            return $fibCount; 
        } else { 
          return getFibonacciSumm($fibCount - 1) + getFibonacciSumm($fibCount - 2); 
        } 
    }
    $result = getFibonacciSumm(12);
    var_dump($result) ;

