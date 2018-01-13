
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


$c = rand(1,10);
$a = rand(1,10);
$b = rand(1,10);

echo "a =$a";
echo "<br>";
echo "b =$b";
echo "<br>";
echo "c =$c";
echo "<br>";

if($c > $a&& $c>$b && $c) {
	echo "ամենա մեծ թիվն է c $c-ն";
}
elseif ($a > $c&& $a>$b) {
	echo "ամենա մեծ թիվն է a $a-ն";
}
elseif($b > $a&& $b>$c) {
	echo "ամենա մեծ թիվն է b $b-ն";
}
elseif ($a == $b) {
	print("a-ն նման է b-ին $a");
}
elseif ($a == $c) {
	print("a-ն նման է c-ին $a");
}
elseif ($b == $a) {
	print("b-ն նման է a-ին $b");
}
elseif ($b == $c) {
	print("b-ն նման է c-ին $b");
}
elseif ($c == $a) {
	print("c-ն նման է a-ին $c");
}
elseif ($c == $b) {
	print("c-ն նման է b-ին $c");
}
elseif ($a>$b && $a>$c && $b<$a && $b>$c) {
	echo "gfnf$a";
	echo "<br>";
	echo "$b";
	echo "<br>";
	echo "$c";
	
}
elseif ($a<$b && $a<$c && $b<$a && $b<$c) {
	echo "gfng$a";
	echo "<br>";
	echo "$b";
	echo "<br>";
	echo "$c";
	
}
elseif ($a>$b && $a>$c && $b<$a && $b>$c) {
	echo "bdft$a";
	echo "<br>";
	echo "$b";
	echo "<br>";
	echo "$c";
	
}


echo "<br>";


?>
</body>
</html>