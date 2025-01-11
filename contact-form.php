<?php
if($_POST["Message"]) {
mail("contact@mollykmcgee.com", "New Message from MollyKMcGee.com",
$_POST["Insert Your Message"]. "From: contact@mollykmcgee.com");
}
?>
