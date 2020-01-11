<?php

require "CardProcessor.php";

$processor = new CardProcessor();

$noOfPlayers = $_POST["noOfPlayers"];

$validNo = $processor->checkNoOfPlayers($noOfPlayers);

if ($validNo) {
    $cards = $processor->distributeCard($noOfPlayers);
    for ($i=0; $i<sizeof($cards); $i++) {
        $playerCards = implode(", ",$cards[$i]);
        $playerNo = $i+1;
        echo "Player $playerNo: $playerCards";
        echo "<br />";
        echo "Size :". sizeof($cards[$i]);
        echo "<br />";
    }
} else {
    echo "The number of players entered is not valid";
}
?>