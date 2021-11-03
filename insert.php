<?php
if (isset($_POST['submit'])){
  $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $sql = "INSERT INTO data_base (name,email,job)
    VALUES ('$name','$email','$job')";
    if ($conn->query($sql) === TRUE) {
     header('location:display.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  }
?>