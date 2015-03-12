<?php


   require_once "src/Scrabble.php";




    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {


        function test_scrabble_letter()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "A";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(1,$result);


        }

        function test_scrabble_LowerCase_letter()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "a";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(1,$result);


        }


        function test_scrabble_Two_letter()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "Aa";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(2,$result);
        }

        function test_scrabble_Two_point_letters()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "D";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(2,$result);
        }

        function test_scrabble_two_two_point_letters()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "DD";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(4,$result);
        }

        function test_scrabble_three_point_letters()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "M";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(3,$result);
        }
        function test_scrabble_different_point_letters()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "MdA";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(6,$result);
        }

        function test_scrabble_two_threepoint_letters()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "Mm";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(6,$result);
        }


    }



?>
