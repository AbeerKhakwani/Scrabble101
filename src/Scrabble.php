<?php
class Scrabble {

     function ScrabbleChecker($input)
     {    $string= strtolower($input);
          $adder= 0;

          $one_point_array = array("a","e","i","o","u","l","s","n","r","t");
          if ((in_array($string,$one_point_array)))
          {

             $adder.= 1;

          }

       return $adder;

     }





}


?>
