<?php

    $array = array(1,2,3,4);

    for($i=0; $i<4; $i++) {
        echo $array[$i];
    }

    echo "Ahora el For Each";

    foreach($array as $value) {
        echo $value;
    }

?>
