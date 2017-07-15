<?php 
/*
  A zero-indexed array A consisting of N integers is given. An equilibrium index of this array is any integer P such that 0   ≤ P < N and the sum of elements of lower indices is equal to the sum of elements of higher indices, i.e. 
  A[0] + A[1] + ... + A[P−1] = A[P+1] + ... + A[N−2] + A[N−1].
  Sum of zero elements is assumed to be equal to 0. This can happen if P = 0 or if P = N−1.
*/
$array = [-1, 3, -4, 5, 1, -6, 2, 1];

solution($array);

function solution($array)
{
  $sumLeftOfP = 0;
  $sumRightOfP = 0;
  $sum = array_sum($array);
  
  for($p=0; $p<sizeof($array); $p++){
    
    if ($p!=0) {
      $sumLeftOfP += $array[$p-1];
      $sumRightOfP = $sum - $sumLeftOfP - $array[$p];
      
      //Check for equilibrium
      if($sumRightOfP == $sumLeftOfP){
          echo "found an equilibrium for P=".$p. "\n";
      }
    }    
  }
}