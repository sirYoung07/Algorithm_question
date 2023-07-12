<?php
//  Write a function :
//         function solution(A);
// that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

// For example, given A = , the function should return 5.

// Given A = [1, 2, 3], the function should return 4.

// Given A = [−1, −3], the function should return 1.

// Write an efficient algorithm for the following assumptions:
//     * N is an integer within the range [1..100,000];
//     * each element of array A is an integer within the range [−1,000,000..1,000,000]. -->


// solution


 function solution(array $A ) : int| string{

    $N = range(1,100000);
    $smallestPositiveInteger = null; 
    if((min($A) < -100000 ) || (max($A) > 1000000)){
        $smallestPositiveInteger =  "Invalid Input, input an array between -1,000,000 and 1,000,000";
    }else{

        foreach($N as $number){
            if(!in_array($number, $A)){
                $smallestPositiveInteger = $number;
                break;
            }else{
    
                // return -1 if the smallest positive integer is out range within $N
                $smallestPositiveInteger = -1;
            }
        }
    }
   return $smallestPositiveInteger;
    
}

echo solution([1, 3, 6,4,1,2]);
echo solution([1, 2,3]);
echo solution([-2,-3]);
