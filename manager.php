<?php
	class MyDB extends SQLite3 
	{
		function __construct() 
		{
	 		$this->open('urlon.db');
      		}
	}

	function getRandomUrl()
	{
		$fMin = 65;
		$fMax = 90;
		$sMin = 97;
		$sMax = 122;
		$noOfTimes = rand(5, 10);
		$url = "";
		for($i = 0;$i <= $noOfTimes;$i++)
		{
			$useMin = rand(0, 100) > 50;
			if ($useMin)
			{
				$url = $url . chr(rand($fMin, $fMax));
			} else {
				$url = $url . chr(rand($sMin, $sMax));
			}
		}
		return $url;
	}
	
	function createNewUrl($fullUrl, $database)
	{
		if (!$fullUrl)
		{
			die();
		}
		$url = getRandomUrl();
		$newUrl="INSERT INTO URLS (URL, FULLURL) VALUES ('" . $url . "','" . $fullUrl . "');";
		$ret = $database->exec($newUrl);
		if(!$ret)
		{
			echo $database->lastErrorMsg();
		}
		return $url;
	}

	$db = new MyDB();
?>
