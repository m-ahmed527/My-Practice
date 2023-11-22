<?php
   class Shape {
      const PI = 3.142 ;
      function area(){
         echo "This is are Function";

      }
      function __call($name,$arg){
         // echo $name;
         // if($name == 'area')
            switch(count($arg)){
               case 0 : return 0 ;
               case 1 : return self::PI * $arg[0] ;
               case 2 : return $arg[0] * $arg[1];
               case 3 : return $arg[0] + $arg[1] + $arg[2];
            // }
            // else{
            //    echo "method not exist";
            }
      }
   }
   $circle = new Shape();
   echo $circle->area(3). "<br>";
   echo $circle->area(4). "<br>";
   
   // $rect = new Shape();
   // echo $rect->area(8,6) ."<br>";
   // $squ = new Shape();
   // echo $rect->area(8,6,8) ."<br>";
   // $sq = new Shape();
   // echo $rect->base(8,6,8) ."<br>";
   



?>

