<?php require_once('./config.php'); ?>

<?php $description = "Sea Seshions"; ?>
<?php $price = "17200"; ?>
<h4>Purchace a <?php echo $description; ?> ticket at a price of <?php echo $price; ?> below</h4>
<br>
<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="<?php echo $description; ?>"
          data-amount="<?php echo $price; ?>"
          data-locale="auto"
          data-currency="eur">
  </script>
  <input type="hidden" name="description" value="<?php echo $description; ?>">
  <input type="hidden" name="price" value="<?php echo $price; ?>">
</form>
