
<?php
$arr1 = ['Dan', 'Ron', 'Boris'];
$arr2 = ['Boris', 'Dan', 'Ruth'];
$result = [];

function unique_names($arr1, $arr2, $result){

    foreach ($arr1 as $index) {
        array_push($result, $index);
    }
    foreach ($arr2 as $index) {
        array_push($result, $index);
    }
    
    // array_unique() checking for duplicates
    print_r(array_unique($result)); 
}
unique_names($arr1, $arr2, $result);
