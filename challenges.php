<?php

function solution($str) {
  $lenght = strlen($str);
  $split = str_split($str);

  for ($i = 0; $i < $lenght; $i++) {

    if($i != $lenght) {
      $getindex = $i + 1;
      if($getindex == $lenght) {
        echo $split[$i] . '_';
        break;
      }
      echo $split[$i] . $split[$getindex]. ' ';
      $i++;
    }

  }
}

solution('abcde');

/*Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

Examples:

solution('abc') // should return ['ab', 'c_']
solution('abcdef') // should return ['ab', 'cd', 'ef'] */