<?php

    require_once "src/FindReplace.php";

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_Word_Replace()
        {
        //Arrange
            $test_Word = new FindReplace;
            $inputOne = "Hello world";
            $inputTwo = "world";
            $inputThree = "universe";

        //Act
            $result = $test_Word->replaceWord($inputOne, $inputTwo, $inputThree );

        //Assert
            $this->assertEquals("Hello universe", $result);
        }
    }

?>
