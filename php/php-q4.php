
    <?php
    $array = [1,2,3];
    $sum = array_sum($array);
    function  prependSum (array  $array, $sum) :  void { 
            array_unshift($array, $sum);
            print_r($array);
    }
   
    prependSum ($array,$sum);
   
    
