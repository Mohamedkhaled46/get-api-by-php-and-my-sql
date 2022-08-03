<?php


$servername="localhost";
$username="root";
$pass="";
$dbname="secondt";

$conn = new mysqli($servername,$username,$pass,$dbname); 

if($conn){

    echo"hiii";

}
else{

    echo"jjjj";
}

?>

