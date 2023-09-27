<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator if ( ! (isset($x) && isset($y) && isset($operation)))rocentowania</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_kwota">Kwota Kredytu </label>
	<input id="x" type="text" name="x" value="<?php isset($x)?print($x) : ""; ?>" /><br />
	<label for="id_oproc">Oprocenctowanie </label>
	<select name="op">
		<option value="dwa">2%</option>
		<option value="piec">5%</option>
		<option value="dziesiec">10%</option>
	</select><br />
	<label for="id_splacanie">Okres spłacania </label>
	<input id="y" type="text" name="y" value="<?php isset($y) ?print($y): "" ; ?>" /><br />
	<input type="submit" value="Oblicz"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Łączna suma wraz z odsetkami po roku: ' . $result; ?>
</div>
<?php } ?>

</body>
</html>