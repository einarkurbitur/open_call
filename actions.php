<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
 
	<title>PS Action Club</title>
</head>

<body>
	<div class="submission_box">
		<p1>SUBMIT YOUR ACTION</p1>
		<form enctype="multipart/form-data" action="upload.php" method="POST">
			<input type="file" name="uploaded_file"></input><br />
			<input type="submit" value="Upload"></input>
		</form>
	</div>
	<div class="header-container">
		<h1> Photoshop Action Open Call</h1>
		<p1 class="header-text" id="intro">Here is a index of all the actions that users have submitted.</p1>
		<div class="" style="width: 36%; display: flex; justify-content: space-between; margin-bottom: 20px;">
			<div class="">
				<button type="button" name="button" onclick="location.href='index.html'" style="">Main page</button>
			</div>
			<div class="">
				<button type="button" name="button" onclick="location.href='tutorial.html'" style="">Instructions</button>
			</div>
			<div class="">
				<button type="button" name="button" onclick="location.href='actions.php'" style="">Index of all actions</button>
			</div>
		</div>
	</div>

	<div class="container">
		<h2>Index of Actions</h2>
		<div class="action_list">
	    <?php
	    $files = array_slice(scandir('./uploads'),2);
	    sort($files); // this does the sorting
	    foreach($files as $file){
	      echo'<li><a href="uploads/'.$file.'"download>&#8595;</a> '.$file.'</li>';
	    }
			?>
		</div>


		<p1 class="project-by">project by: Einar Andersen and Florian van Zandwijk</p1>

	</div>

</body>

</html>
