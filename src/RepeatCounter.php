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
            $string_array = $this->explodeString($string_lower);
            $word_count = 0;
            foreach ($string_array as $word) {
                if($word == $find_word_lower) {
                    $word_count += 1;
                }
            }
            return $word_count;
        }
    }

?>
