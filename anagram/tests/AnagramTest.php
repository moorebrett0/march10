<?php

    require_once "src/Anagram.php";


        class AnagramTest extends PHPUnit_Framework_TestCase
        {
            function test_anagramMatch()
            {
                //Arrange
                $testAnagram = new Anagram;
                 $input1 = "a";
                 $input2 = "a";

                 //Act
                 $result = $testAnagram->anagramMatch($input1, $input2);

                 //Assert
                 $this->assertEquals("the same!", $result);


            }
        }
?>