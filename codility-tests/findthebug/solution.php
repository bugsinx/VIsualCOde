function solution(&$A) {
	$ans = 0;
	for ($i = 1; $i < sizeof($A); $i++) {
		if ($ans > $A[$i])
		    $ans = $A[$i];
	}
     return $ans;
}