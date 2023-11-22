<?php
$arr=[1,2,2,3];
$count=0;
foreach($arr as $key => $elem){
    $cond=true;
    for($i=0; $i<count($arr);$i++){
        if($i != $key){
            if($arr[$i]-$elem==1||$elem-$arr[$i]==1){
                $cond = false;
            }
        }
    }
    if ($cond) {
        $count++;
    }
}
echo $count;