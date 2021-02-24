<?php
	require 'manager.php';
	require 'content/main_header.php';
	echo "<title>Urlify</title>";
	echo "<script>";
	echo "function copyToClipboard(e) {";
    	echo "var tempItem = document.createElement('input');";

    	echo "tempItem.setAttribute('type','text');";
	echo "tempItem.setAttribute('display','none');";
    
    	echo "let content = e;";
    	echo "if (e instanceof HTMLElement) {";
    	echo "content = e.innerHTML;";
    	echo "}";
    
    	echo "tempItem.setAttribute('value',content);";
    	echo "document.body.appendChild(tempItem);";
    
    	echo "tempItem.select();";
    	echo "document.execCommand('Copy');";

    	echo "tempItem.parentElement.removeChild(tempItem);";
	echo "}</script>";
	$fullurl = $_POST['url'];
	$url = createNewUrl($fullurl, $db);
	echo "<h2>Copy: </h2>";
	echo "<input id='cop' class='copy' readonly='readonly' value='" . "https://" . $_SERVER["HTTP_HOST"] . "/redirect.php?url=" . $url . "'><br>";
	echo "<button onclick='copyToClipboard(document.getElementById(" . '"cop"' . ").value);'>Copy</button>";
	require 'content/footer.php';
?>
