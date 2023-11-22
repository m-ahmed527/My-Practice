<?php
// function sumOfArrayElements($arr){
//     $sum=0;
//     for($key=0;$key<count($arr);$key++){
//         $sum=$sum+$arr[$key];
//     }
//     return $sum;
// }
// $arr=[1,2,3,4,10,11];
// echo sumOfArrayElements($arr);

// function compareTriplets($a , $b){
//     $points=[
//         0,
//         0,
//     ];
//     for($i=0; $i<count($a); $i++){
        
//             if($a[$i]>$b[$i]){
//             $points[0]++;
//             }
//             elseif($a[$i]<$b[$i]){
//                 $points[1]++;
//             }
        
// }
// return $points;
// }
// $a=[5,6,7];
// $b=[4,7,6];
// $point=compareTriplets($a,$b);
// print_r($point);


// function aVeryBigSum($ar){

//     $bigSum=0;
//     for($key=0;$key<count($ar);$key++){
//         $bigSum=$bigSum+$ar[$key];
//     }
//     return $bigSum;


// }
// $ar=[1000000001 , 1000000002  ,1000000003 , 1000000004 ,1000000005 ];
// echo aVeryBigSum($ar);



// function diagonalDifference($arr){
//     $lsum=$rsum=0;
//     $count=count($arr)-1;
//     foreach($arr as $i=> $ar){
//         $lsum+=$arr[$i][$i];
//         $rsum+=$arr[$i][$count-$i];
//     }
//     // echo $lsum ."\n". $rsum;
//     $absdiff=abs($lsum-$rsum);
//      return $absdiff;
// }

// $arr=[
//     [9,2,5],
//     [4,6,6],
//     [7,8,10]
// ];
// echo diagonalDifference($arr);


// function ratio($arr) {
//         $totcounts = count($arr);
//         $pos=$neg=$zer=0;
        
//         $ratios = [
//             0,
//             0,
//             0
//         ];
        
//         foreach ($arr as $value) {
//             if ($value < 0) {
//                 $neg++;
//             } elseif ($value > 0) {
//                 $pos++;
//             } else {
//                 $zer++;
//             }
//         }
        
//         $ratios[0]=number_format($pos/$totcounts,6);
//         $ratios[1]=number_format($neg/$totcounts,6);
//         $ratios[2]=number_format($zer/$totcounts,6);
        
//         return $ratios;
//     }

//     $arr = [-4, 3, -9, 0, 4, 1];
//     $result = ratio($arr);

//     echo $result[0]. "\n";
//     echo $result[1]."\n";
//     echo $result[2]."\n";


// function staircase($n){

//     for($i=1; $i<=$n; $i++){
//         for($j=$i; $j<=$n-1 ; $j++){
//             echo " ";
//         }
//         for($k=1; $k<=$i; $k++){
//             echo "#";
//         }
//         echo "\n";
//     }
// }
// $n=10;
// staircase($n);
// function miniMaxSum($arr){
// sort($arr);

//     $max=$min=0;
//     for($i=0 ;$i<count($arr);$i++){
//         if(isset($arr[$i+1])){
//             $max+=$arr[$i+1];
//         }
//         if($i!=count($arr)-1){
//             $min+=$arr[$i];
//         }
//     }
//     echo $min ." ".$max;
// }
// $arr=[1, 3, 5, 4, 2];
// // sort($arr);
// miniMaxSum($arr);


// function minSum(array $arr)
// {
//     array_pop($arr);
//     return array_sum($arr);
// }
// function maxSum(array $arr)
// {
//     array_shift($arr);
//     return array_sum($arr);
// }
// function minMaxSum($arr)
// {
//     sort($arr);
//     return minSum($arr) . ' ' . maxSum($arr);
// }

// echo minMaxSum($arr);
// function selectionSort($array) {
//     $n = count($array);

//     for ($i = 0; $i < $n - 1; $i++) {
//         $minIndex = $i;
//         for ($j = $i + 1; $j < $n; $j++) {
//             if ($array[$j] < $array[$minIndex]) {
//                 $minIndex = $j;
//             }
//         }
        
//         if ($minIndex !== $i) {
//             // Swap array[$i] and array[$minIndex]
//             $temp = $array[$i];
//             $array[$i] = $array[$minIndex];
//             $array[$minIndex] = $temp;
//         }
//     }

//     return $array;
// }

// // Example usage
// $array = [5, 3, 1, 4, 2];
// $sortedArray = selectionSort($array);
// print_r($sortedArray);

// $array=array('2','4','8','5','1','7','6','9','10','3');

// echo "Unsorted array is: ";
// echo "<br />";
// print_r($array);


// for($j = 0; $j < count($array); $j ++) {
//     for($i = 0; $i < count($array)-1; $i ++){

//         if($array[$i] > $array[$i+1]) {
//             $temp = $array[$i+1];
//             $array[$i+1]=$array[$i];
//             $array[$i]=$temp;
//         }       
//     }
// }

// echo "Sorted Array is: ";
// echo "<br />";
// print_r($array);

// function maxcount($candles){
// $max=max($candles);
// $count=0;
// foreach($candles as $key => $value){
//     if($max==$candles[$key]){
//         $count++;
//     }
// }
// return $count;
// }
// $candles=[4,4,4,3,2,1,5,5];
// echo maxcount($candles);

function timeConversion($s){
    $time=strtotime($s);
return date("H:i:s",$time);
}
$s='12:01:00AM';
echo timeConversion($s);


?>