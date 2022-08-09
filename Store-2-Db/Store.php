<?php
$data= $_POST['sensor'];
$conn = new mysqli('localhost','root','','sensordata');
if($conn->connect_error){
  echo "$conn->connect_error";
  echo "error";
  die("Connection Failed : ". $conn->connect_error);
} else { 
  $sql = "INSERT INTO vals (sensor)
  VALUES ('$data')";
  
  if ($conn->query($sql) === TRUE) {
    echo "the Integer $data is Stored successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>