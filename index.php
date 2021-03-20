<?php
	require 'manager.php';
	require 'content/main_header.php';
	echo "<title>" . $title . "</title>";

   	if(!$db) {
      	echo $db->lastErrorMsg();
	}

	if(isset($_GET['url']))
	{

		$url = $_GET['url'];
		$sql = "SELECT * FROM URLDEFS WHERE URL='" . $url . "'";
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
	} elseif (isset($_POST['createurl']))
	{
		$fullurl = $_POST['createurl'];
		$url = createNewUrl($fullurl, $db);
		echo "<h2>Copy: </h2>";
		echo "<input id='cop' class='copy' readonly='readonly' value='" . "https://" . $_SERVER["HTTP_HOST"] . "/?url=" . $url . "'><br>";
		echo "<button onclick='copyToClipboard(document.getElementById(" . '"cop"' . ").value);'>Copy</button>";
	} else {
		require 'content/form.php';
	}
	
	require 'content/footer.php';
   	$db->close();
?>
