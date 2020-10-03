<?php 

require_once "controllers/template.controller.php";

$a = new ctrTemplate;
$a -> template();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Libreria de boostrap css -->
	<link rel="stylesheet" type="text/css" href="views/dist/css/bootstrap.min.css">

</head>
<body>



<!-- Script de bootstrap y jquery -->
<script type="text/javascript" src="views/dist/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="views/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="views/dist/js/util.js"></script>
</body>
</html>