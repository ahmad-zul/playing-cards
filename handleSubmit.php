<?php

require "CardProcessor.php";

$processor = new CardProcessor();

$noOfPlayers = $_POST["noOfPlayers"];

$validNo = $processor->checkNoOfPlayers($noOfPlayers);

if ($validNo) {
    $cards = $processor->distributeCard($noOfPlayers);
    echo "Cards has been evenly distributed to each players and below are the results";
    echo "<br />";
    echo "=====================================================";
    echo "<br />";
    for ($i=0; $i<sizeof($cards); $i++) {
        $playerCards = implode(", ",$cards[$i]);
        $playerNo = $i+1;

        echo "Player $playerNo: $playerCards";
        echo "<br />";
        
    }
} else {
    echo "Invalid number of players. Number of player must be an integer greater than 0.";
}
echo "<br />";
echo "<a href='./index.html'>Back to main page</a>";
?>