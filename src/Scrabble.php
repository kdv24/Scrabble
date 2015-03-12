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

            elseif(($player_input == "G") || ($player_input =="D"))
            {
                return "2";
            }

            elseif(($player_input =="B") || ($player_input =="C") || ($player_input == "M")  || ($player_input =="P"))
            {
                return "3";
            }

            elseif(($player_input == "F") || ($player_input == "H") || ($player_input =="V") || ($player_input == "W") || ($player_input == "Y"))
            {
                return "4";
            }
        }


    }

    ?>
