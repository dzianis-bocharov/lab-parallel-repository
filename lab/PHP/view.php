<?php

	define ('SUCCESS_MESSAGE', 'success');
	define ('ERROR_MESAGE', 'error');
	
	function display_message ($msg, $msg_type) {
		echo "<div class = '{$msg_type}'>\n";
		echo "<p>{$msg}</p>\n";
		echo "</div>\n";
	};
	
	function display_messages($success_msg = NULL, $error_msg = NULL) {
		echo "<div id='messages'>";
		
		if(!is_null($success_msg)){
			display_message ($success_msg, SUCCESS_MESSAGE); 
		};
		if(!is_null($error_msg)){
			display_message ($error_msg, ERROR_MESAGE); 
		};
		
		echo "</div>";
	};
	
	function display_head($title, $javascript) {
	}

	function display_title ($title, $success_message = NULL, $error_message = NULL){
	}
	
	function page_start($title, $javascript = NULL, $success_message = NULL, $error_message = NULL){
			display_head($title, $javascript);
			display_title($title, $success_message, $error_message);
	}
?>