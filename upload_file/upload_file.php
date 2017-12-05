<?


include 'db.php';


$stmt = $db->prepare("SELECT * FROM uploads");
$stmt->execute();
$uploads = $stmt->FetchAll();


include 'header.php'

?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>


<link rel="stylesheet" type="text/css" href="style.css">



<div id="projects-list">

	<a href="project-edit.php">New Project</a>

	<?
	foreach($uploads as $title) {
		?>
		<div class="project-list-item">
			
			<? echo $title->title; ?> 
		<div><a class="edit" href="project-edit.php?id=<? echo $project->id; ?>">Edit</a></div>
		<div><a class="delete" href="project-delete.php?id=<? echo $project->id; ?>">Delete</a></div>
		</div>
		</div>


		<?

	}
	?>	
</div>


</body>
</html>