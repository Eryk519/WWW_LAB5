<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$baza_1 = 'moja_strona';

	
	$link = mysql_connect ($dbhost, $dbuser, $dbpass);
	if (!$link) echo '<b>przerwane połączenie </b>';
	if (!mysql_select_db($baza_1)) echo 'nie wybrano bazy';
	
	?>


<?php
function PokazPodstrone($id)
	{
		$id_clear = htmlspecialchars($id);\
			$squery = "SELECT * FROM page_list WHERE id= '$id-clear' LIMIT 1";
				$row = mysql_fetch_array($result);
			
				if(empty($row['id']))
				{
					$web = '[nie_znaleziono_strony]'
				}
				else
				{
					$web = $row['page_content'};
				}
			
		return $web;
	{
?>	