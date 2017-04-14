<?php
/*
 *  __     ___   _ ____   ___  
 *  \ \   / / \ | |  _ \ / _ \ 
 *   \ \ / /|  \| | |_) | | | |
 *    \ V / | |\  |  __/| |_| |
 *     \_/  |_| \_|_|    \___/ 
 *                          
 *
 *
 *
 * 
 */
function check_prime($n){
$p = true;
if($n < 100000001){
for ($i = 1; $i <= $n; $i++){
	if($n == 0 OR $n == 1){
$p = false;
}
	if($n != $i AND $i != 1){
	if(is_int($n/$i)){
		echo "$n is divisible by $i<br>";
		$p = false;
	}
	}
}
echo "conclusion: ";
if($p == false){
echo "$n is not prime";
}else{
echo "$n is prime because it has not divisible numbers other than 1 and $n";
}
}else{
echo "Too large number preferably between 1 and 100000000";
}
}
?> 

