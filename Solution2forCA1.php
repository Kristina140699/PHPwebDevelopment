<!DOCTYPE html>
<html>
  <head>
    <style>
      body{background-image: url("Leave.jpg");
        width: 100%;
        
  
  background-attachment: fixed;
  }
  .bgColor{
    background-color:rgb(102, 0, 102, 0.3);
    margin:30px;
    padding: 2px;
  }
     .bg{
       margin: 5px;     
       padding: 10px;}
    </style>
</head>
    <body><div class="bgColor">
        <center><h1>Data Types in PHP</h1>
        <img src="dt.png"><br/> </center></div>
       
     
        <p style="background-color: rgb(0, 0, 102, 0.2);"><b>Data type:</b> is an attribute associated with
   a piece of data that tells a computer system how to 
   interpret its value. Understanding data types 
   ensures that data is collected in the preferred 
   format and the value of each property is as expected.
   Variables can store data of different types, 
   and different data types can do different things. 
   Similarly, PHP supoorts these different datatypes to get the numerous 
   work done, following are a few examples.</p>
   <hr color="black" size= 2px width= 75%/>
   <br/>
   <b>Example of Integer Data type</b><br/>
<div class="bg" style="background: #fff;">
<?php
$a =1413;
 
echo "Value: ".$a. "<br/> DataType: ";
echo var_dump($a)."<br>";?></div>
<br/><b>Example of Boolean Data type</b><br/>
<div class="bg" style="background: #fff;">
<?php
 
$b = true;
echo "Value: ".$b. "(true) <br/>DataType: ";
echo var_dump($b)."<br>";?></div>
<br/><b>Example of String Data type</b><br/>
<div class="bg" style="background: #fff;">
<?php
 
$c ="This is a String value";
echo "Value: ".$c. "<br/>DataType: ";
echo var_dump($c)."<br>";?></div>
<br/><b>Example of Float Data type</b><br/>
<div class="bg" style="background: #fff;">
<?php
 

$f = 28.658;
echo "Value: ".$f. "<br/>DataType: ";
echo var_dump($f)."<br>";?></div>
<br/><b>Example of Array Data type</b><br/>
<div class="bg" style="background: #fff;">
<?php
 
$arr = array("Data Science", "ML", "Internet of Things");
echo "Value: Array <br/>DataType: ";
echo var_dump($arr)."<br>";?></div>
<br/><b>Example of NULL Data type</b><br/>
<div class="bg" style="background: #fff;">
<?php
 

$n = NULL;
echo var_dump($n)."<br>"; ?></div>
<br/><b>Example of Object Data type</b><br/>
<div class="bg" style="background: #fff;">
<?php
 

class Fruit {
    public $name;
    
  
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  $grape = new Fruit();
  $orange = new Fruit();
  $grape->set_name('Grape');
  $orange->set_name('Orange');
  echo "Value: ";
  echo $grape->get_name();
  echo"<br>";
  echo "Value: ";
  echo $orange->get_name();
  echo"<br>";
  echo "Data Type: ";
  echo var_dump($grape);
  echo "<br>";
  echo "Data Type: ";
  echo var_dump($orange);

  ?></div>
</body>
</html>
