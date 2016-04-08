<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_yWy4crhsaZEfm2ZLzQtGkdRq",
  "publishable_key" => "pk_test_NXTpBhEVwIsYpPYS8ltRRV4D"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>