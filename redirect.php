<?php
	ob_start();
	require 'content/main_header.php';
	require 'manager.php';
	echo "<title>Redirecting...</title>";
	echo "<br>";

	$url = $_GET["url"];
	$sql = "SELECT * FROM URLS WHERE URL='" . $url . "'";
	$rurl = $db->query($sql);
	$row = $rurl->fetchArray(SQLITE3_ASSOC);
	$redir = "";
	if (isset($row['FULLURL']))
	{
		$redir = $row['FULLURL'];
	} else {
		$redir = "/404.php";
	}
	header("Location: " . $redir,  true, 303);
	die();
	require 'content/footer.php';
?>
