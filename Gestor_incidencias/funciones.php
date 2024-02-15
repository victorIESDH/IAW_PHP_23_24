<?php  

function fValidaSesion() {
	if(!empty($_SESSION["user-session"])){
		return 1;
	}else{
		return 0;
	}
}
?>