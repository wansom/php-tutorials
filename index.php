<?php
//strings
$user_name ="warren";
$phone_number="+254705122230";
echo($user_name);
//intagers &floats
$net_salary = 200000;
$gross_salary = 270000.00;
echo($net_salary);
//constants
define("AGE",26);
echo AGE;
//arrays
$friends =["sang","Abdi","Maroa","Sunday"];
print_r($friends);
$family =["sister"=>"Joan","brother"=>"Dancun","Father"=>"Josiah","mother"=>"Margaret"];
echo($family["sister"]);
//objects and classes
class Developer{
   var $developer_name;
   var $phone_number; 
    
    function writeCode(){
        print("code review");
    }
    // getters
   function getName(){
        echo $this->developer_name;
    }
   // setters
   function setName($name){
    $this->developer_name = $name;
   }

}

// object
$warren =new Developer;
$warren->setName("Ochieng Warren");
$warren->getName();
 



?>