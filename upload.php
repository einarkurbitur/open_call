<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>


<style type="text/css">
    
    .text {
  font-family: Arial;
}

button {
  font-family: helvetica;
}

  </style>




</style>

</head>
<body>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
 <button type="button" name="button" onclick="location.href='index_actions.html'" style="margin: 20px;">Go Back</button>
<!--     <p>Upload your file</p> -->
<!--     <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input> -->
  </form>
</body>
</html>

<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

?>
<a class="text"><? if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    } 
  }
?> </a>