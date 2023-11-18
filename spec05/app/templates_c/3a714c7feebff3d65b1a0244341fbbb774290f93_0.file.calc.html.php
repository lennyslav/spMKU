<?php
/* Smarty version 4.3.2, created on 2023-11-17 22:26:55
  from 'C:\xampp\htdocs\spec04_smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6557da9fe7f054_33484551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a714c7feebff3d65b1a0244341fbbb774290f93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec04_smarty\\app\\calc.html',
      1 => 1700256382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6557da9fe7f054_33484551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11080364996557da9fe70391_77559026', 'footer');
?>




			
				<header id="header" class="alt">
					<h1><a href="index.html">Alpha</a> by HTML5 UP</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>

							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			
				<section id="banner">
					<h2>Kalkulator kredytowy</h2>
					<p>Oblicz kredyt</p>
					<ul class="actions special">
					</ul>
				</section>

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21203916946557da9fe70ed0_96558047', 'main');
?>

			
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>
		

		
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}

			class Block_11080364996557da9fe70391_77559026 extends Smarty_Internal_Block
{
			public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11080364996557da9fe70391_77559026',
  ),
);
			public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>	przykładowa tresć stopki<?php
}
}

				class Block_21203916946557da9fe70ed0_96558047 extends Smarty_Internal_Block
{
				public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_21203916946557da9fe70ed0_96558047',
  ),
);
			public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Calc</h2>
							<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="get">
								<fieldset>
								<label for="id_kw">Podaj kwotę pożyczki: </label>
								<input id="id_kw" type="number" name="kw" value="<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
" /><br />

								<label for="id_op">Oprocentowanie: </label>
								<input id="id_op" type="number" name="op" value="<?php echo $_smarty_tpl->tpl_vars['op']->value;?>
									" min="0,1" max="100" /><br /><br />
	
								<label for="id_os">Podaj czas spłaty w miesiącach: </label>
								<input id="id_os" type="number" name="os" value="<?php echo $_smarty_tpl->tpl_vars['os']->value;?>
" /><br />
								</fieldset>	
								<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
							</form>	
						</header>
						<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
							<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
								<h4>Wystąpiły błędy: </h4>
								<ol class="err">
								<?php
		$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
		$_smarty_tpl->tpl_vars['msg']->do_else = true;
		if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
		$_smarty_tpl->tpl_vars['msg']->do_else = false;
		?>
								<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
								<?php
}
		$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ol>
							<?php }?>
						<?php }?>

						<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
							<h4>Wynik</h4>
							<p class="res">
							<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

							</p>
						<?php }?>>
					</section>
					<?php
}
}

}
