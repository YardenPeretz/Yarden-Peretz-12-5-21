
     <?php
       $arr = [1,2,1,2,3,3,4,4,5,5,6,6];
       function  filterNumbersFromArray(array $arr): void {

              // array_unique() checking for duplicates
              $result = array_unique($arr);
              print_r($result);
        
       }

       filterNumbersFromArray($arr);
