<?php

include('connection.php');
$name = $_POST['name'];
$details = $_POST['details'];
$price = $_POST['price'];
$description = $_POST['description'];

$file = '';

if(isset($_FILES['file']) AND $_FILES['file']['error'] == 0){
    
    $upload_dir = 'upload/';
    $fname = str_replace('','-',$_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir.$fname);
    $file = $upload_dir.$fname;
}

$sql = "INSERT INTO `productinfo` (`ID`, `name`, `details`, `price`, `file`, `description`) 
VALUES (NULL ,'".$name."', '".$details."', '".$price."', '".$file."', '".$description."')";
$conn->query($sql);

echo "Success";

?>