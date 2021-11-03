<?php 
require 'connection.php';
if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $sql1 = "DELETE FROM data_base WHERE  id =$id";
  $result = mysqli_query($conn,$sql1);
  if($result) {
      header('location:display.php');
  }
}
?>