<?php

    require_once __DIR__."/../src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_single_value1()
        {
            //Arrange
            $test_single_value1 = new Scrabble;
            $player_input = 'A';

            //Act
            $result = $test_single_value1->getWordValue($player_input);

            //Assert
            $this->assertEquals("1", $result);
        }
    }
?>
