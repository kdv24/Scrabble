<?php

    require_once __DIR__."/../src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_single_value_1()
        {
            //Arrange
            $test_single_value_1 = new Scrabble;
            $player_input = 'A';

            //Act
            $result = $test_single_value_1->getWordValue($player_input);

            //Assert
            $this->assertEquals("1", $result);
        }

        function test_variety_value_1()
        {
            //Arrange
            $test_variety_value_1 = new Scrabble;
            $player_input = 'T';

            //Act
            $result = $test_variety_value_1->getWordValue($player_input);

            //Assert
            $this->assertEquals("1", $result);
        }

        function test_variety_value_2()
        {
            //Arrange
            $test_variety_value_2 = new Scrabble;
            $player_input = 'G';

            //Act
            $result = $test_variety_value_2->getWordValue($player_input);

            //Assert
            $this->assertEquals("2", $result);
        }
    }
?>
