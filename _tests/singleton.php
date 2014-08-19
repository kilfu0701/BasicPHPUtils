<?php
require_once('../BasicPHPUtils.php');

$a =& BasicPHPUtils::Instance();
$b =& BasicPHPUtils::Instance();

var_dump($a === $b);
