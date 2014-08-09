	<?PHP
	if ($selected_radio == $_POST['ButtonC'])
	{
		
		$monfichier = fopen('files/file1.txt', 'a+');
	fputs($monfichier, 'c'); // On écrit le nouveau nombre de
	fclose($monfichier);
	header ('Location: light.php');
}
elseif ($selected_radio == $_POST['ButtonD']) {
	
	$monfichier = fopen('files/file1.txt', 'a+');
	fputs($monfichier, 'd'); // On écrit le nouveau nombre de
	fclose($monfichier);
	header ('Location: light.php');
}

?>