<?php

/*
	This handles email from submit form on lower portion of site.
	jwagman@wisc.edu	
*/

  mail( "jwagman@wisc.edu", $_POST['subject'], $_POST['message'], "From: " . $_POST['email']);
  mail( "mgoldberg4@wisc.edu", $_POST['subject'], $_POST['message'], "From: " . $_POST['email']);
  mail( "sbsmith5@wisc.edu", $_POST['subject'], $_POST['message'], "From: " . $_POST['email']);
  mail( "croossin94@gmail.com", $_POST['subject'], $_POST['message'], "From: " . $_POST['email']);
?>