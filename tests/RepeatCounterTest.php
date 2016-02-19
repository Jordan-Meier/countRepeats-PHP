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
            $result = $test_RepeatCounter->explodeString($string);

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

        function test_countRepeats_singleWordNoMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $string = 'guitar';
            $find_word = 'piano';

            //Act
            $result = $test_RepeatCounter->countRepeats($string, $find_word);

            //Assert
            $this->assertEquals(0 , $result);
        }

        function test_countRepeats_multipleWordsSingleMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $string = 'I enjoy playing guitar';
            $find_word = 'guitar';

            //Act
            $result = $test_RepeatCounter->countRepeats($string, $find_word);

            //Assert
            $this->assertEquals(1 , $result);
        }

        function test_countRepeats_multipleWordsMultipleMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $string = 'I am going to the guitar store to play a guitar';
            $find_word = 'guitar';

            //Act
            $result = $test_RepeatCounter->countRepeats($string, $find_word);

            //Assert
            $this->assertEquals(2 , $result);
        }

        function test_countRepeats_caseSensitivity()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $string = 'I am going to Guitar Store to buy a guitar';
            $find_word = 'guitar';

            //Act
            $result = $test_RepeatCounter->countRepeats($string, $find_word);

            //Assert
            $this->assertEquals(2 , $result);
        }

        function test_countRepeats_specialCharacters()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $string = 'My guitar, which I have named betsy, is a fun guitar to play. GuiTar!!';
            $find_word = 'guitar';

            //Act
            $result = $test_RepeatCounter->countRepeats($string, $find_word);

            //Assert
            $this->assertEquals(3 , $result);
        }
    }

?>
