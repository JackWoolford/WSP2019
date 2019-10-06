Hi <?php echo htmlspecialchars($_POST['name'] . ' ' . $_POST['surname']); ?>. 
Your email address is <?php echo (string)$_POST['email']; ?>
 and postcode is <?php echo (string)$_POST['postcode']; ?>.