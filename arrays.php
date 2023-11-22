<?php
// $arr=['name','code',1,2];
// // for($i=0; $i<count($arr); $i++){
// //     echo $arr[$i]. "\n";
// // }
// foreach($arr as $ar){
//     echo $ar ."  ";
// }

// $arr=['name'=>'ahmed','code'=>'1132'];


// echo"<table border='2px' cellpadding='5px'>";
// echo "<tr><th>Key</th>
//     <th>Value</th></tr>";
// foreach($arr as $key=>$ar){
//     echo "<tr><td> $key</td><td> $ar  </td></tr>";
// }

// echo "</table>";

// $arr=[
//     ['name1','code1','price1'],
//     ['name2','code2','price2'],
//     ['name3','code3','price3'],
//     ['name4','code4','price4']
// ];
// foreach($arr as $key){
//     foreach($key as $value){
//     echo $value. " ";
// }
// echo "\n";
// }


// print_r($arr);
$arr = [
    'prod1' => ['name1', 'code1', 'price1'],
    'prod2' => ['name2', 'code2', 'price2'],
    'prod3' => ['name3', 'code3', 'price3'],
    'prod4' => ['name4', 'code4', 'price4']
];

// echo $arr['prod1'][0];
// print_r($arr);
// foreach($arr as $ar){
//     echo $ar[0];
//     foreach($ar as $a){
//         // echo $a;
//         break;
//     }
//     echo "\n";
//     break;
// }


// $arr = [
//     'a',
//     'b',
//     'c',
//     'd',
// ];
// $arr = [
//     ['name1', 'code1', 'price1'],
//     ['name2', 'code2', 'price2'],
//     ['name3', 'code3', 'price3'],
//     ['name4', 'code4', 'price4']
// ];
// function printArrayElements($arr, $index = 0, $in = 0)
// {

//     if ($index < count($arr)) {
//         if ($in < count($arr[$index])) {
//             echo ($arr[$index][$in]) . "\n";
//             $in++;
//             printArrayElements($arr, $index, $in);
//         } else {
//             $index++;
//             printArrayElements($arr, $index, 0);
//         }
//     }
// }

// printArrayElements($arr);
// print_r($arr[0]);



// function printArrayElements($arr, $index = 0, $key = null) {
//     if ($index < count($arr)) {
//         if ($key === null) {
//             // Start printing keys and values for the current sub-array.
//             $subArray = $arr[$index];
//             $keys = array_keys($subArray);
//             printArrayElements($keys, 0, $index);
//         }
//          elseif ($key < count($arr[$index])) {
//             $currentKey = $arr[$index];
//             $currentKey = array_keys($currentKey)[$key];
//             $currentValue = $arr[$index][$currentKey];
//             echo "$currentKey : $currentValue\n";
//             printArrayElements($arr, $index, $key + 1);
//         } else {
//             // Move on to the next sub-array.
//             $index++;
//             printArrayElements($arr, $index, null);
//         }
//     }
// }


// $arr = [
//     [
//         'name' => 'name1',
//         'code' => 'code1',
//         'price' => 'price1'
//     ],
//     [
//         'name' => 'name2',
//         'code' => 'code2',
//         'price' => 'price2'
//     ],
//     [
//         'name' => 'name3',
//         'code' => 'code3',
//         'price' => 'price3'
//     ],
//     [
//         'name' => 'name4',
//         'code' => 'code4',
//         'price' => 'price4'
//     ]
// ];

// function printArrayElements($arr,$index = 0,$keys = null) {
    
//     if($index < count($arr))
//     {
//         $subArray = $arr[$index];
//         $keys = array_keys($arr[$index]);
//         printArrayElements($keys,$index,$keys[$index]);
//     }
//     elseif($keys<count($arr[$index])){



//     }
// }
// printArrayElements($arr);


echo " hel\alo ";