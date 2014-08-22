<?php
	session_start();
?>
<!doctype html>
<html>
<head>
	<title>Sucess Message</title>
	<style type="text/css">
		p {
		background-color: green;
		margin-top: 20px;
		border: 2px solid black;
		padding: 10px;
		display: inline-block;
		margin-left: 150px;
	}
</style>
</head>
<body>
<?php if (isset($_SESSION['success'])) 
	  {	?>
		<p><?= $_SESSION['success'] ?></p>
<?php } ?>
</body>
</html>