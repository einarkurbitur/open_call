<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700" rel="stylesheet">
	<style>
		html,
		body {
			width: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			font-family: 'Roboto Mono', sans-serif;
		}

		.container {
			width: 60%;
			margin-left: 20%;
			margin-bottom: 5%;
			background-color: white;
			box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.5);
			display: flex;
			flex-direction: column;
			align-items: center;
			padding-top: 20px;
			padding-bottom: 20px;
		}

		.header-container {
			width: 60%;
			margin-left: 20%;
			margin-bottom: 2%;
			background-color: white;
			box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.5);
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.image {
			width: 80%;
		}

		.text {
			font-size: 14px;
			width: 80%;
			padding-top: 10px;
			padding-bottom: 25px;
		}

		.header-text {
			width: 80%;
			padding: 10px;
		}

		.project-by {
			font-size: 10px;
		}

		.action_list{
      width: 80%;
			align-items: center;
			justify-content: center;
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			flex-wrap: wrap;
			-webkit-flex-wrap: wrap;
		}

		/*.gallery_item {
			width: 40%;
			display: flex;
			flex-direction: column;
			align-items: center;
		}*/
	</style>

	<title>Photoshop Action Open Call</title>
</head>

<body>
	<div class="header-container">
		<h1> Photoshop Action Open Call</h1>
		<p1 class="header-text" id="intro">Here is a index of all the actions that users have submitted.</p1>
		<div class="" style="width: 80%; display: flex; justify-content: space-between; margin-bottom: 20px;">
			<div class="">
				<button type="button" name="button" onclick="location.href='tutorial.html'" style="">Instructions</button>
			</div>
			<div class="">
				<button type="button" name="button" onclick="location.href='index.html'" style="">Main page</button>
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
	      echo'<p><a href="uploads/'.$file.'"download>&#8595;</a> '.$file.'</p>';
	    }
			?>
		</div>


		<p1 class="project-by">project by: Einar Andersen and Florian van Zandwijk</p1>

	</div>

</body>

</html>
