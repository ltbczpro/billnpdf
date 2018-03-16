<?php


require __DIR__."/../app/loader.php";

require __DIR__."/../model/bill.php";

$bills = browseBill($_SESSION['userid']);

require __DIR__."/../view/invoid.php";