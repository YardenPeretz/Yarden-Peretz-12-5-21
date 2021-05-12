
<?php
$arr = [1,'b','a',2,'c','d',5,'z',9];

function filterNumbersFromArray($arr): void{

             // $arr returns nothing but numbers using array_filter
             $arr = array_filter($arr, 'is_numeric');              
             print_r($arr);
       
}

filterNumbersFromArray($arr);
