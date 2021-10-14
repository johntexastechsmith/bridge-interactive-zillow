<?php
require_once 'bootstrap.php';
use JohnTexasTechSmith\BridgeInteractiveZillow\Zestimates;
$zestimates = new Zestimates(getenv('SERVER_TOKEN'));
var_dump($zestimates->request());
