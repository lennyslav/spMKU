<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

//Rozpoczęcie definiowania funkcji 
function getParams(&$kw, &$op, &$os){
	$kw = isset($_REQUEST ['kw'])? $_REQUEST ['kw']: null;
	$op = isset($_REQUEST ['op'])? $_REQUEST ['op']: null;
	$os = isset($_REQUEST ['os'])? $_REQUEST ['os']: null;
	
}

function validate(&$kw, &$op, &$os, &$messages) {
	if ( ! (isset($kw) && isset($os) && isset($op))) {
		return false;
	}

	if ( $kw == "") {
		$messages [] = 'Nie podano kwoty pożyczki';
	}
	if ( $op == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	if ( $os == "") {
		$messages [] = 'Nie podano okresu spłaty';
	}
	
	if (count ( $messages ) != 0) return false;
		
		if (! is_numeric( $kw )) {
			$messages [] = 'Kwota pożyczki nie jest liczbą';
		}
		
		if (! is_numeric( $op )) {
			$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
		}	
		if (! is_numeric( $os )) {
			$messages [] = 'Okres spłaty nie jest liczbą całkowitą';
		}	
	
		if ( $kw < 0) {
			$messages [] = 'Kwota pożyczki musi być liczbą dodatnią';
		}
		if ( $op < 0) {
			$messages [] = 'Oprocentowanie musi być liczbą dodatnią';
		}
		if ( $os < 0) {
			$messages [] = 'Okresu spłaty musi być liczbą dodatnią';
		}
			if (count ( $messages ) != 0) return false;
	else return true;
	
		
}


function process(&$kw, &$op, &$os, &$messages, &$result){
	$kw = intval($kw);
	$os = intval($os);
	$op = floatval($op);

	$lata = $op/12;
	$opr = $os/100;

	if($kw > 100000) {
		if($_SESSION['role'] == 'admin'){
			$result = $kw + ($kw*$opr*$lata);
		} else {
			$messages[] = "Aby wykonać tą operację należy mieć uprawnienia administratora!!";
		}
	} else {
		$result = $kw + ($kw*$opr*$lata);
	}

	if($op < '5') {
		if($_SESSION['role'] == 'admin'){
			$result = $kw + ($kw*$opr*$lata);
		} else {
			$messages[] = "Aby wykonać tą operację należy mieć uprawnienia administratora!!";
		}
	} else {
		$result = $kw + ($kw*$opr*$lata);
	}
}

$kw = null;
$os = null;
$op = null;
$result = null;
$messages = array();

getParams($kw, $op, $os);
	if(validate($kw, $op, $os, $messages)) {
		process($kw, $op, $os, $messages, $result);
	}
	

include 'calc_view.php';