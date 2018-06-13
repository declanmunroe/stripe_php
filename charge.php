<?php
  require_once('./config.php');

//  die(print_r($_POST));
  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
  
  $description  = $_POST['description'];
  $price  = $_POST['price'];
  

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $price,
      'currency' => 'eur'
  ));

  echo '<h1>Successfully charged €'.$price.' to customers email'.$email.'</h1>';
?>