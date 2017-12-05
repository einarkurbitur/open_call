<?


include 'db.php';


$stmt = $db->prepare("SELECT * FROM uploads");
$stmt->execute();
$uploads = $stmt->FetchAll();



?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>


<link rel="stylesheet" type="text/css" href="style.css">



<div id="projects-list">
	<h3>Index of actions</h3>
	<a href="project-edit.php">New Project</a>
	
	<?
	foreach($uploads as $title) {
		?>
		<div class="project-list-item">
		
			<? echo $title->title; ?> 

		</div>


		<?

	}
	?>	
</div>


</body>
</html>