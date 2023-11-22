<?php


class student{
    private $f_name;
    private $l_name;

    private function setName($fname , $lname){
        $this->f_name=$fname;
        $this->l_name=$lname;
        return $this->f_name ." " .  $this->l_name;

    }
    public function __call($name, $arguments)

    {
        if(method_exists($this,$name)){
            call_user_func_array([$this,$name],$arguments);
        }
        else{
            echo "Non Existing or Private : $name";
        }
        // echo "This is Non Existing or Private Mathod : $name";
        // print_r( $arguments);    
    }
}

$std= new student();

// $std->setName('Ahmed', 'Ansari');
$std->setNames('Ahmed', 'Ansari');
echo "<pre>";
// print_r($std) ;
// echo "</pre>";

?>