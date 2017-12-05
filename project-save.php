	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


<?

error_reporting(E_ALL);
ini_set('display_errors', 1);




include 'db.php';

?>

<div class="navigation">
      <div class="">
        <button type="button" name="button" onclick="location.href='index.html'" style="">Home</button>
      </div>

      <div class="">
        <button type="button" name="button" onclick="location.href='gallery.html'" style="">Gallery</button>
      </div>

			<div class="">
				<button type="button" name="button" onclick="location.href='tutorial.html'" style="">How to create an action</button>
			</div>
  </div>




<div class="header-container">
<?
// phpInfo();

 $target = "media/"; 
 $target = $target . basename( $_FILES['file']['name']); 


$action=($_FILES['file']['name']); 




$stmt = $db->prepare("INSERT INTO uploads (title, artist_name, file) VALUES ( ?, ?, ?)");
$stmt->execute(array( $_POST['title'], $_POST['artist'], $_FILES['file']['name']));
$id = $db->LastInsertId();

 if(move_uploaded_file($_FILES['file']['tmp_name'], $target)) 
 { 
 
 //Tells you if it is all ok 
?><h1><? echo "Thank you for your submission"; ?></h1><?

 } 
 else { 
 
 //Gives an error if it is not ok 
 echo "Sorry, there was a problem uploading your file."; 
 } 

// echo $_FILES['file']['tmp_name'];



echo "<pre>";
echo "<p class='header-text'>"."Action Title:"."</p>";

echo "<p class='header-text' style='color:rgb(12,197,235); margin-top:-30px;'''>".$_POST['title']."</p>";

echo "<p class='header-text'>"."Artist Name:"."</p>";

echo "<p class='header-text' style='color:rgb(12,197,235); margin-top:-30px;''>".$_POST['artist']."</p>";

echo "<p class='header-text'>"."File:"."</p>";

echo "<p class='header-text' style='color:rgb(12,197,235); margin-top:-30px;'>".$_FILES['file']['name']."</p>";
echo "<pre>";
echo "<pre>";


?>

<button type="button" name="button" onclick="location.href='index.html'" >Go Back</button>

</div>

