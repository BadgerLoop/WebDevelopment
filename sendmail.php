<?php

/*
	This handles email from submit form on lower portion of site.
	jwagman@wisc.edu	
*/

$subject = 	'[BadgerLoop Contact] ' . $_POST['subject'];

  mail( "jwagman@wisc.edu", $subject, $_POST['message'], "From: " . $_POST['email']);
  mail( "kemcnally@wisc.edu", $subject, $_POST['message'], "From: " . $_POST['email']);
  mail( "croossin94@gmail.com", $subject, $_POST['message'], "From: " . $_POST['email']);
?>