<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: T_login.php");
  }
?>
<center>
<html>

<link rel="stylesheet" type="text/css" href="../css/dashboard.css" >
</head>
<body>
<table>
<span style="font-size:45px; color:C133FF"><left><strong>Teacher Home</strong></left></span>
<div class="topnav">

	  <a class="active" href="Student_info.php">students</a>
	 
	  <a  href="uploads.php">Upload</a>
	  <a href="marks_Upload.php">upload marks</a>
	  <a href="anonymous_review.php">Reviews</a>
	   <a href="notice.php">notice</a>
	  <a href="T_logout.php">Logout</a>		 
</div>
 
<table>
</body>
</html></center>
