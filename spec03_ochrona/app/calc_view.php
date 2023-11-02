<!DOCTYPE HTML>

<html>
	<head>
		<title>Kalkulator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<form action="<?php print(_APP_URL);?>/app/security/logout.php" method="get">
	<input type="submit" class="pure-button pure-button-primary">
	</form>
	<body class="landing is-preload">
		<div id="page-wrapper">

				<section id="banner">
					<h2>Kalkulator kredytowy</h2>
				</section>
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Logowanie</h2>
							<form action="<?php print(_APP_URL);?>/app/calc.php" method="get">
								<fieldset>
								<label for="id_kw">Podaj kwotę pożyczki: </label>
								<input id="id_kw" type="number" name="kw" value="<?php out($kw); ?>" /><br />

								<label for="id_op">Oprocentowanie: </label>
								<input id="id_op" type="number" name="op" value="<?php out($op); ?>" min="0,1" max="100" /><br /><br />
	
								<label for="id_os">Podaj czas spłaty w miesiącach: </label>
								<input id="id_os" type="number" name="os" value="<?php out($os); ?>" /><br />
								</fieldset>	
								<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
							</form>	
						</header>
						<?php
							if (isset($messages)) {
								if (count ( $messages ) > 0) {
									echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
									foreach ( $messages as $key => $msg ) {
										echo '<li>'.$msg.'</li>';
									}
									echo '</ol>';
								}
							}
							?>

							<?php if (isset($result)){ ?>
							<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
							<?php echo 'Wynik: '.$result; ?>
							</div>
							<?php } ?>
					</section>


		</div>


	</body>
</html>