<?php
function remove_duplicate ($list)  {
    $num_unique = array_values(array_unique($list));


    return $num_unique;
}



$num = array (1,1,2,2,3,3,4,4,5,5,6,6) ;
print_r(remove_duplicate($num));
?>