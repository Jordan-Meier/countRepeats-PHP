<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_explodeString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $string = 'guitar is fun';
            $find_word = 'guitar';

            //Act
            $result = $test_RepeatCounter->explodeString($string, $find_word);

            //Assert
            $this->assertEquals(array('guitar', 'is', 'fun'), $result);
        }

        function test_countRepeats_singleWordMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $string = 'guitar';
            $find_word = 'guitar';

            //Act
            $result = $test_RepeatCounter->countRepeats($string, $find_word);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
