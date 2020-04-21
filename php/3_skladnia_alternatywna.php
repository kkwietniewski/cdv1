<?php
$a = 3;
$b = 2;
    //składnia alternatywna
    if($a < $b):
        echo "\$a jest mniejsza od zmiennej \$b";
    elseif($a > $b):
        echo "\$a jest większa od zmiennej \$b";
    else:
        echo "\$a jest równa zmiennej \$b";
    endif;

    switch ($variable):
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    endswitch;

?>