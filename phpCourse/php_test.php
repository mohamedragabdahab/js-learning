<?php
echo "Hello World";
echo '<br>';
echo 5;
echo '<br>';

$name = "Mahmoud";
$age = 20;
echo "My Name is :" . $name . " and My age is :" . $age;

//-----------------------------------------------------------

// • Data type •
    /*
         1- String
         2- integer
         3- float
         4- Boolean
         5- Array
         6- null
         7- Object
         8- Resource
  */
$str = "This var is string"; // String
$int = 55;                  // integer
$float = 10.5;             // float (Double)
$bool = true;             // Boolean
$array = array(          // array
    "Name" => "val1",
    "age" => "val2",
    "address" => "val3"
);
class book {
    function book(){
        $this->genre = "Adventure";
    }
}
$object = new book(); // Object

echo '<br>';
echo gettype($str);
echo '<br>';
echo gettype($int);
echo '<br>';
echo gettype($bool);
echo '<br>';
echo gettype($float);
echo '<br>';
echo gettype($array);
echo '<br>';
echo gettype($object);
