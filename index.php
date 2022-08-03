<?php
//strings
$user_name ="warren";
$phone_number="+254705122230";
echo($user_name);
//intagers &floats
$net_salary = 200000;
$gross_salary = 270000.00;
echo($net_salary."</br>");
//constants
define("AGE",26);
echo AGE;
//arrays
$friends =["sang","Abdi","Maroa","Sunday"];
print_r($friends);
$family =["sister"=>"Joan","brother"=>"Dancun","Father"=>"Josiah","mother"=>"Margaret"];
echo($family["sister"]."</br>");
//objects and classes
class Developer{
   var $developer_name;
   var $phone_number; 
    
    function writeCode(){
        print("code review"."</br>");
    }
    // getters
   function getName(){
        echo $this->developer_name;
    }
   // setters
   function setName($name){
    $this->developer_name = $name;
   }
   // constructors
   function __construct($name, $phone){
    $this->developer_name =$name;
    $this->phone_number=$phone;
   }

}
// for loops
for($i=0;$i<count($friends);$i++){
    echo("this is the day the lord has made"."</br>");
}
// while loop
$i=0;
while($i<count($family)){
    echo("truthy"."</br>");
    $i++;
}

// object
$warren =new Developer("warren ochieng","0705122230");
$warren->getName();

 



?>