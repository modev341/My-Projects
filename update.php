<?php


    if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $sql = "UPDATE data_base SET id = $id, name =$name, email =$email,job= $job  WHERE id=$id ";
    $result = mysqli_query($conn , $sql);
    if($result) {
        header('location:display.php');
    }
    
    $conn->close();
  }
 ?>