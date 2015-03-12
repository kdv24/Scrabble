<?php
    class Scrabble
    {
        function getWordValue($player_input)
        {   $score = 0;
            $player_inputUC = strtoupper($player_input);
            $input_characters = array();
            $input_characters = str_split($player_inputUC);
            foreach ($input_characters as $letter)
            {
                //A E I O U L N R S T
                if(($letter == "A") || ($letter == "E") || ($letter == "I") || ($letter == "O") || ($letter == "U") || ($letter == "L") || ($letter == "N") || ($letter == "R") || ($letter == "S") || ($letter == "T"))
                {
                $score = $score + 1;

                }

                elseif(($letter == "G") || ($letter =="D"))
                {
                $score = $score +  2;
                // var_dump($score);


                }

                elseif(($letter =="B") || ($letter =="C") || ($letter == "M")  || ($letter =="P"))
                {
                $score = $score +  3;


                }

                elseif(($letter == "F") || ($letter == "H") || ($letter =="V") || ($letter == "W") || ($letter == "Y"))
                {
                $score = $score +  4;


                }

                elseif($letter == "K")
                {
                $score = $score +  5;


                }

                elseif(($letter == "J") || ($letter == "X"))
                {
                $score = $score +  8;


                }

                elseif(($letter == "Q") || ($letter == "Z"))
                {
                $score = $score +  10;

                }

            }
            // var_dump($score);

            return $score;

        }


    }

    ?>
