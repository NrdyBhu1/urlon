<?php
	$title = "Urlon";
	echo "<!DOCTYPE html>";
	echo "<html lang='en'>";
	echo "<meta charset='UTF-8'>";
    	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
	echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";	
	echo "<link rel='shortcut icon' href='./favicon.ico'>";	
	echo "<a href='/'><img src='./icon.svg' class='icon noselect' title='Urlon' width='100' height='auto'></a>";
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
?>
