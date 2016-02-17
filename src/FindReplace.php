<?php


    class FindReplace
    {
        function replaceWord($inputOne, $inputTwo, $inputThree)
        {
            $new_input = explode(" ", $inputOne);
            $new_array = array();

            foreach ($new_input as $word)
            {
                if ($word == $inputTwo)
                {
                    $word = $inputThree;
                }

                array_push($new_array, $word);

            }

            $new_array = implode(" ", $new_array);

            return $new_array;
        }
            //
            //
            // for(i; i < 2; i+1)
            // {
            //     if ($inputOne[i] == $inputTwo)
            //     {
            //         return $inputThree;
            //     }
            // }




    }


?>
