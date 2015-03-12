<?php
    class Scrabble
    {
        function getWordValue($player_input)
        {
            //A E I O U L N R S T
            if(($player_input == "A") || ($player_input == "E") || ($player_input == "I") || ($player_input == "O") || ($player_input == "U") || ($player_input == "L") || ($player_input == "N") || ($player_input == "R") || ($player_input == "S") || ($player_input == "T")) 
            {
                return "1";
            }
        }


    }

    ?>
