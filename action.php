<?php
session_start();
	// print_r($_POST);
	if(isset($_POST) & !empty($_POST)){
		if($_POST['captcha'] == $_SESSION['code']){
			echo "correct captcha";
		}else{
			echo "Invalid captcha";
		}
    }
    echo '<br/><a href="index.html">Captch</a>';
?>