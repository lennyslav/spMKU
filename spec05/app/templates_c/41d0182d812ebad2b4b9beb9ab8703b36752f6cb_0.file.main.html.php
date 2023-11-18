<?php
/* Smarty version 4.3.2, created on 2023-11-17 22:26:55
  from 'C:\xampp\htdocs\spec04_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6557da9fe9aba9_32168355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d0182d812ebad2b4b9beb9ab8703b36752f6cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec04_smarty\\templates\\main.html',
      1 => 1700253792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6557da9fe9aba9_32168355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Domyślny tytuł" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body class="landing is-preload">
	<div id="page-wrapper">


    <!--Header-->
    <header id="header" class="alt">
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>

                <li><a href="#" class="button">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!--Baner-->
    <section id="banner">
		<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Domyślny Nagłówek" ?? null : $tmp);?>
</h2>
		<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Domyślny opis" ?? null : $tmp);?>
</p>
		<ul class="actions special">
		</ul>
	</section>

    <!--Main-->
    <section id="main" class="container">

        <section class="box special">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_534246296557da9fe9a2d5_03856903', 'main');
?>

        </section>
    </section>


    <!--Footer-->

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


        <!-- Scripts -->
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


    </div>
    </body>
</html><?php }

class Block_534246296557da9fe9a2d5_03856903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_534246296557da9fe9a2d5_03856903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  Zawartosc kalkulatora kredytowego <?php
}
}

}
