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

        function test_variety_value_3()
        {
            //Arrange
            $test_variety_value_3 = new Scrabble;
            $player_input = "B";

            //Act
            $result = $test_variety_value_3->getWordValue($player_input);

            //Assert
            $this->assertEquals("3", $result);
        }

        function test_variety_value_4()
        {
            //Arrange
            $test_variety_value_4 = new Scrabble;
            $player_input = "F";

            //Act
            $result = $test_variety_value_4->getWordValue($player_input);

            //Assert
            $this->assertEquals("4", $result);
        }

        function test_variety_value_5()
        {
            //Arrange
            $test_variety_value_5 = new Scrabble;
            $player_input = "K";

            //Act
            $result = $test_variety_value_5->getWordValue($player_input);

            //Assert
            $this->assertEquals("5", $result);
        }

        function test_variety_value_8()
        {
            //Arrange
            $test_variety_value_8 = new Scrabble;
            $player_input = "J";

            //Act
            $result = $test_variety_value_8->getWordValue($player_input);

            //Assert
            $this->assertEquals("8", $result);
        }

        function test_variety_value_10()
        {

            //Arrange
            $test_variety_value_10 = new Scrabble;
            $player_input = "Q";

            //Act
            $result = $test_variety_value_10->getWordValue($player_input);

            //Assert
            $this->assertEquals("10", $result);
        }
    }
?>
