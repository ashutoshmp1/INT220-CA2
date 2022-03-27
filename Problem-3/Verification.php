<?php
$base = "documents/";
$origin = $base . basename($_FILES["fileToUpload"]["name"]);
$status = 1; //to check the status of file
$imageFileType = strtolower(pathinfo($origin, PATHINFO_EXTENSION));

//Student clicks on submit button
if (isset($_POST["submit"])) 
{
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) 
  {
    echo "File is an image!<br>";
    $status = 1;
  }
  else 
  {
    echo "File is not an image!<br>";
  }
}

//File already exists
if (file_exists($origin)) 
{
  echo "File exists!!!<br>";
  $status = 0;
}

//Only pdf and png formats
if 
(
  $imageFileType != "pdf" && $imageFileType != "png"
) 
{
  echo "File not supported!!!<br>";
  $status = 0;
}

//File status
if ($status == 0) 
{
  echo "File not uploaded!!!<br>";
} 
else 
{
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $origin)) 
  {
    echo "File Uploaded!!!<br>";
  } 
  else 
  {
    echo "AN ERROR OCCURED!!!<br>";
  }
}