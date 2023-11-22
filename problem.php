<?php
function ratio(){
    
    $tot=count($arr);
    
    $neg= $pos = $zer = 0;
    foreach($arr as $ar){
        if($ar < 0){
            $neg++;
        }
        elseif($ar > 0)
        {
            $pos++;
        }
        else{
            $zer++;
        }
    }
    $ratioNeg=$neg/$tot;
    $ratioPos=$pos/$tot;
    $ratioZer=$zer/$tot;
    
    $ratios= number_format($ratioNeg,6) . "\n ". number_format($ratioPos,6) ."\n ". number_format($ratioZer,6);

    return $ratios;

}
$arr=[-4, 3, -9, 0, 4, 1];
echo ratio($arr);

// function ratio($arr) {
//     $counts = count($arr);
    
//     $ratios = [
//         'neg' => 0,
//         'pos' => 0,
//         'zer' => 0
//     ];
    
//     foreach ($arr as $value) {
//         if ($value < 0) {
//             $ratios['neg']++;
//         } elseif ($value > 0) {
//             $ratios['pos']++;
//         } else {
//             $ratios['zer']++;
//         }
//     }
//     // print_r($ratios);
//     foreach ($ratios as $key => $count) {
//         $ratio = number_format($count / $counts, 6);
//         $ratios[$key] = $ratio;
//     }
    
//     return $ratios;
// }

// $arr = [-4, 5, 6, -3, 7, 9, -4,0];
// $result = ratio($arr);

// print_r($result);

// function longestSubarray($arr){
//     $length=0;
//     $n=0;
//     for($i=0; $i<count($arr); $i++){
//         if(isset($arr[$i+1]))
//         {
//         if($arr[$i+1]-$arr[$n]==1 || $arr[$i+1]-$arr[$n]==0){
//         }
//             for($n=0;$n<=$i+1;$n++){

//             }
//             $length++;
//         // $n++;
//     }
//     }

//     return $length;
// }

// $arr=[1,3,3,4,4,1];
// sort($arr);
// echo longestSubarray($arr);


function sumOfArrayElements($arr){
    $sum=0;
    for($key=0;$key<count($arr);$key++){
        if(isset($arr[$key+1])){
            $sum=$arr[0]+$arr[$key+1];
        }
        return $sum;
    }
}
$arr=[1,2,3,4];
echo sumOfArrayElements($arr);


?>


