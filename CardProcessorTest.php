<?php
use PHPUnit\Framework\TestCase;
require  "CardProcessor.php";

class CardProcessorTest extends TestCase
{
    private $cardProcessor;

    protected function setUp()
    {
        $this->cardProcessor = new CardProcessor();
    }

    protected function tearDown()
    {
        $this->cardProcessor = NULL;
    }

    /*
    * Tests for checkNoOfPlayers function
    */
    // Test valid number of platers
    public function testCheckNoOfPlayersValid()
    {
        $result = $this->cardProcessor->checkNoOfPlayers(1);
        $this->assertEquals(true, $result);
    }

    // Test invalid number of players
    public function testCheckNoOfPlayersInvalid()
    {
        $result = $this->cardProcessor->checkNoOfPlayers(0);
        $this->assertEquals(false, $result);
    }

    // Test invalid number of players with negative number
    public function testCheckNoOfPlayersInvalidNegativeNumber()
    {
        $result = $this->cardProcessor->checkNoOfPlayers(-1);
        $this->assertEquals(false, $result);
    }

    // Test invalid number of players with a string
    public function testCheckNoOfPlayersInvalidString()
    {
        $result = $this->cardProcessor->checkNoOfPlayers("test");
        $this->assertEquals(false, $result);
    }

    // Test invalid number of players with Floating number
    public function testCheckNoOfPlayersFloatingNumber()
    {
        $result = $this->cardProcessor->checkNoOfPlayers(3.4);
        $this->assertEquals(false, $result);
    }


    /*
    * test for distributeCard function
    */
    // Test valid result if the number of players same as the number of results
    public function testDistributeCardReturnSameNumberofPlayer()
    {
        $result = $this->cardProcessor->distributeCard(22);
        $this->assertEquals(22, sizeof($result));
    }

    // Test invalid result if the number of player not the same as result
    public function testDistributeCardReturnNotSameNumberofPlayer()
    {
        $result = $this->cardProcessor->distributeCard(56);
        $this->assertNotEquals(22, sizeof($result));
    }

    // Test if the number of players is invalid
    public function testDistributeCardInvalidNumberofPlayers()
    {
        $result = $this->cardProcessor->distributeCard(0);
        $this->assertEquals('Invalid number of players. Number of player must be an integer greater than 0.', $result);
    }

    // Test if the number of players given is negative
    public function testDistributeCardInvalidNumberofPlayersNegativeNumber()
    {
        $result = $this->cardProcessor->distributeCard(-2);
        $this->assertEquals('Invalid number of players. Number of player must be an integer greater than 0.', $result);
    }

    // Test if the function able to handle number of players that is more than number of cards
    public function testDistributeCardNumberOfPlayersMoreThanCards()
    {
        $result = $this->cardProcessor->distributeCard(57);
        $this->assertEquals(57, sizeof($result));
    }

    // Test if the number of players is floating number
    public function testDistributeCardInvalidNumberofPlayersFloatingNumber()
    {
        $result = $this->cardProcessor->distributeCard(2.3);
        $this->assertEquals('Invalid number of players. Number of player must be an integer greater than 0.', $result);
    }
}
?>