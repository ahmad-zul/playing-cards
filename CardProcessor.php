<?php
class CardProcessor {

    public $spade;
    public $heart;
    public $diamond;
    public $club;
    public $cards;

    function __construct() {
        $this->spade = ["S-2","S-3","S-4","S-5","S-6","S-7","S-8","S-9","S-A","S-X","S-J","S-Q","S-K"];
        $this->heart = ["H-2","H-3","H-4","H-5","H-6","H-7","H-8","H-9","H-A","H-X","H-J","H-Q","H-K"];
        $this->diamond = ["D-2","D-3","D-4","D-5","D-6","D-7","D-8","D-9","D-A","D-X","D-J","D-Q","H-K"];
        $this->club = ["C-2","C-3","C-4","C-5","C-6","C-7","C-8","C-9","C-A","C-X","C-J","C-Q","C-K"];
        $this->cards = array_merge($this->spade, $this->heart, $this->diamond, $this->club);
      }

    function checkNoOfPlayers($noOfPlayers) {
        if ( strval($noOfPlayers) === strval(intval($noOfPlayers)) ) {
            return ($noOfPlayers > 0) ? true : false;
        } else {
            return false;
        }
    }

    function distributeCard($noOfPlayers) {
        $player = $this->checkNoOfPlayers($noOfPlayers);
        if (!$player) {
            return 'Invalid number of players. Number of player must be an integer greater than 0.';
        }
        $totalCards = sizeof($this->cards);
        $noOfPlayers = (int) $noOfPlayers;
        $cardsForEachPlayer = floor($totalCards / $noOfPlayers); // determine the no of cards per player
        
        // shuffle the cards
        shuffle($this->cards);

        for($i=0; $i < $noOfPlayers; $i++){
            $playerWithCards[$i] = [];
        }
        for($j=0; $j < sizeof($this->cards);$j++){
            array_push($playerWithCards[$j % $noOfPlayers], $this->cards[$j]);
        }
        return $playerWithCards;
    }
}
