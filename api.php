<?php
 include 'conn.php';

 $query="select * from plug";
 $a=$conn->query($query);
 $output=[];

 while($item=$a->fetch_assoc()){

    $output[]=$item;
 }

echo json_encode($output);


// $data=["name"=>"mohamed","website"=>"http://localhost/2t/index.php"];
// $jsond=json_encode($data);
// print_r($jsond);


// $data= file_get_contents("http://localhost/2t/index.php");
//  echo $data;
?>