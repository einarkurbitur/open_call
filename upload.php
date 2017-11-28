<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700i" rel="stylesheet">
<style type="text/css">
body {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  font-family: 'Roboto Mono', sans-serif;
}
.header-container {
  width: 60%;
  margin-left: 20%;
  margin-bottom: 5%;
  background-color: white;
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.5);
  display: flex;
  flex-direction: column;
  align-items: center;
}
  </style>




</style>

</head>
<body>
  <div class="header-container">
		<h1> Photoshop Action Open Call</h1>
		<div class="" style="display: flex; justify-content: flex-start; margin-bottom: 20px;">
      <form enctype="multipart/form-data" action="upload.php" method="POST">
      <?PHP
        if(!empty($_FILES['uploaded_file']))
        {
          $path = "uploads/";
          $path = $path . basename( $_FILES['uploaded_file']['name']);

      ?>
      <a class="text"><? if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
            echo "The file <i>".  basename( $_FILES['uploaded_file']['name']).
            "</i> has been uploaded ";
          } else{
              echo "There was an error uploading the file, please try again!";
          }
        }
      ?> </a>
      </form>
		</div>
    <button type="button" name="button" onclick="location.href='index.html'" style="margin: 20px;">Go Back</button>

	</div>


</body>
</html>
