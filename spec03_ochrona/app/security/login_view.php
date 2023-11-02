<!DOCTYPE HTML>
<html>
	<head>
		<title>Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="spec03_ochrona/assets/css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">


				<section id="banner">
					<h2>Kalkulator kredytowy</h2>
					<ul class="actions special">
					</ul>
				</section>

				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Logowanie</h2>
							<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
								<fieldset>
								<label for="id_login">Login: </label>
								<input id="email" type="text" name="login" value="<?php out($form['login']); ?>" />
								<label for="id_pass">Password: </label>
								<input id="id_pass" type="password" name="pass" />
								</fieldset>
								<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
							</form>	
						</header>
						<?php

							if (isset($messages)) {
								if (count ( $messages ) > 0) {
									echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
									foreach ( $messages as $key => $msg ) {
										echo '<li>'.$msg.'</li>';
									}
									echo '</ol>';
								}
							}
							?>
					</section>

		</div>


	</body>
</html>