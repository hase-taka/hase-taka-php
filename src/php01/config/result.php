<?php
$name =htmlspecialchars($_POST["name"],ENT_QUOTES);
print "私の名前は、" . $name ;
echo "<br>";

$commodity =htmlspecialchars($_POST["commodity"],ENT_QUOTES);
print "ご希望の商品は、" . $commodity;
echo "<br>";

$quantity =htmlspecialchars($_POST["quantity"],ENT_QUOTES);
print "注文数は、" . $quantity ;