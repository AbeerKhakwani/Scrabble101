<?php



   require_once "src/ScrabbleArray.php";




    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {


        function test_scrabble_letter()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "A";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(1,$result);


        }

        function test_scrabble_LowerCase_letter()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "a";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(1,$result);


        }


        function test_scrabble_Two_letter()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "Aa";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(2,$result);
        }

        function test_scrabble_Two_point_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "D";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(2,$result);
        }

        function test_scrabble_two_two_point_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "DD";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(4,$result);
        }

        function test_scrabble_three_point_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "M";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(3,$result);
        }
        function test_scrabble_different_point_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "MdA";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(6,$result);
        }

        function test_scrabble_two_threepoint_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "Mm";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(6,$result);
        }

        function test_scrabble_four_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "F";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(4,$result);
        }

        function test_scrabble_five_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "k";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(5,$result);
        }

        function test_scrabble_two_five_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "kK";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(10,$result);
        }

        function test_scrabble_allLetters_letters()
        {   //Arrange
            $test_scrabble = new ScrabbleArray;
            $input = "Abeer";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(7,$result);
        }


    }



?>
