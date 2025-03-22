<?php
$my_name = htmlspecialchars($_POST['my_name'],ENT_QUOTES);
$choice = htmlspecialchars($_POST['choice'],ENT_QUOTES);
$number = htmlspecialchars($_POST['number'],ENT_QUOTES);

print"私の名前は、".$may_name."<br>";
print"ご希望の商品は、".$choice."<br>;
print"注文数は、".$number;