<?php
    if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
    require_once '../controllers/studentController.php';
?>
<?php
    deleteStudent($_GET["id"]);
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
?>