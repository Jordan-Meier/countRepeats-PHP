<?php
    class RepeatCounter
    {
        function explodeString ($string)
        {
            return $string_array = explode(' ', $string);
        }

        function countRepeats($string, $find_word)
        {
            $string_lower = strtolower($string);
            $find_word_lower = strtolower($find_word);
            $stripped_string = preg_replace("/[^a-zA-Z 0-9]+/", "", $string_lower);
            $stripped_word = preg_replace("/[^a-zA-Z 0-9]+/", "", $find_word_lower);
            $string_array = $this->explodeString($stripped_string);
            $word_count = 0;
            foreach ($string_array as $word) {
                if($word == $stripped_word) {
                    $word_count += 1;
                }
            }
            return $word_count;
        }
    }
?>
