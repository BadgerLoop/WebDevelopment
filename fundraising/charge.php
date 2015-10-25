<?php
  require_once('./config.php');
  $token  = $_POST['stripeToken'];
  $email = $_POST['stripeEmail'];
  $amount = $_COOKIE['Amount']; 
  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'card'  => $token
  ));
 try {
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $amount,
      'currency' => 'usd'
  ));
  }
catch(\Stripe\Error\Card $e) {
  $error = $e->getMessage();
}

// 	echo '<h1>Thank You for donating!</h1>';
	
	header("Location: https://www.badgerloop.com"); /* Redirect browser */
// 	header("Location:)
	die();
?>