<?php
class Scrabble {

     function ScrabbleChecker($input)
     {    $string= strtolower($input);
          $split_array_input= str_split( $string);
          $adder= 0;
          $one_point_array = array("a","e","i","o","u","l","s","n","r","t");
         foreach ($split_array_input as $letter)
         {         
              if (in_array($letter,$one_point_array))
              {


                 $adder.= 1;

              }
         }

       return $adder;

     }





}


?>
