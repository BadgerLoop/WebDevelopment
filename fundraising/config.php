<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_live_4Vb8kJwWGak7It7voSnT1TlL",
  "publishable_key" => "pk_live_fXAVXCShfBiNNmsb1nEiAxC2"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>