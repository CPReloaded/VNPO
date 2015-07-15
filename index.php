<!--
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
 * The VNPO Project was built to check whether a number is prime
 * So no longer need to be doing mental arithmetic
 * License:
 * The VNPO work is licensed Rafael Romão
 * with a Creative Commons License - Attribution-NonCommercial 4.0 International.
 * https://i.creativecommons.org/l/by-nc/4.0/88x31.png
 */
-->
<?php
header('Content-Type: text/html; charset=utf-8');
$p = true;
$n = intval($_GET['n']);
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
?> 

