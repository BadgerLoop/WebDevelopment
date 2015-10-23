<?php

/*
	This handles email from submit form on lower portion of site.
	jwagman@wisc.edu	
*/

  mail( "jwagman@wisc.edu", $_POST['subject'], $_POST['message'], "From: " . $_POST['email']);
 
?>