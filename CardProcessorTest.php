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
    * Tests for capitalize function
    */
    public function testCheckNoOfPlayersValid()
    {
        $result = $this->cardProcessor->checkNoOfPlayers(1);
        $this->assertEquals(true, $result);
    }

    public function testCheckNoOfPlayersInvalid()
    {
        $result = $this->cardProcessor->checkNoOfPlayers(0);
        $this->assertEquals(false, $result);
    }

    public function testCheckNoOfPlayersInvalidString()
    {
        $result = $this->cardProcessor->checkNoOfPlayers("test");
        $this->assertEquals(false, $result);
    }
}
?>