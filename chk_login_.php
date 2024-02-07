<?php
	session_start();
    include("condb.php");

    $sql="SELECT * FROM tbl_member 
    WHERE ref_l_id='".$mem_username."' ";
    $result = mysqli_query($condb,$sql);

	if($_SESSION['ref_l_id'] == "")
	{
		echo "Please Login!";
		exit();
	}
?>