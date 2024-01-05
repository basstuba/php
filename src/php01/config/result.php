<?php
$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
$item=htmlspecialchars($_POST['item'],ENT_QUOTES);
$order=htmlspecialchars($_POST['order'],ENT_QUOTES);
print "私の名前は、".$name."<br/>"."ご希望の商品は、".$item."<br/>"."注文数は、".$order;