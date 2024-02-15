<?php
function fValidaAcceso ($user, $pass)
	{

	if ($user == "menganito" && $pass == "menganito") {

		return 1;

	} else {

		return 0;
	}
}

function fValidaSession ()
	{

	if (isset($_SESSION['mi_session'])) {

		return 1;

	} else {

		return 0;
	}
}
?>