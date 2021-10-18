<?php

include('db.php');

if (isset($_POST['save_task'])) {
  // echo 'DATOS ENVIADOS';
  // var_dump($title);

  $title = $_POST['title'];
  $description = $_POST['description'];
  // echo $title;
  // echo $description;

  $query = "INSERT INTO php_msql_crud.task(title, description) VALUES ('$title', '$description')";
  
  $result = mysqli_query($conn, $query);
  if (!isset($result)) {
    die("Se jodió todo");
  }

  $_SESSION['message'] = 'Task saved successfully';
  $_SESSION['message_type'] = 'success';


  header('Location: index.php');
}


?>