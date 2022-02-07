<?php

$fName=$_POST["firstName"];

if(strlen($fName)<5){
    echo "First name is invalid";
}
else{
    echo "Your First Name is ".$_POST["firstName"];
}
echo "<br>";

$lName=$_POST["lastName"];

if(strlen($lName)<5){
    echo "Last name is invalid";
}
else{
    echo "Your Last Name is ".$_POST["lastName"];
}

echo "<br>";

$pass=$_POST["password"];
if(strlen($pass)<8){
    echo "Password is invalid";
}
else{
    echo "Your password is valid";
}

echo "<br>";

if(isset($_POST["designation"])){
    echo "You designation is ".$_POST["designation"];
}
else{
    echo "Please select any Designation";
}

echo "<br>";

if(isset($_POST["java"]) || isset($_POST["php"]) || isset($_POST["php"]) ){
    
    if(isset($_POST["java"])){
        echo "Your preferred language is ".$_POST["java"];
        echo "<br>";
    }
    if(isset($_POST["php"])){
        echo "Your preferred language is ".$_POST["php"];
        echo "<br>";
    }
    if(isset($_POST["c++"])){
        echo "Your preferred language is ".$_POST["c++"];
        echo "<br>";
    }
}
else{
    echo "You must select a Preferred language";
    echo "<br>";
}


?>