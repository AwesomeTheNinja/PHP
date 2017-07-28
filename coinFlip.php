<!DOCTYPE html>
<html>
    <head>
		<title>Flip It!</title>
	</head>
	<body>
    <?php
	$heads = 0;
	$tails = 0;
	$totalFlips = 0;
	echo "<center><img width='350' height='350' src='https://images.milled.com/2015-06-01/CjYESzpLEn_hj4Bo/IFCW8AuXObrx.gif'><br>We're going to flip!</center>";
	while($heads <= 1 || $tails <= 1) {
	    rand(0,1);
	    if(rand(0,1) == 0) {
	        $heads = $heads + 1;
	    }
	    else {
	        $tails = $tails + 1;
	    }
	}
	if($heads == 1) {
	    echo "<center><img width='350' height='350' src='http://www.gambling911.com/files/styles/article_image/public/publisher/Super-Bowl-Coin-Toss-Heads-020316L.jpg?itok=L4jga2uu'><br>Heads won!<center>";
	}
	else {
	    echo "<center><img width='350' height='350' src='http://bjc.berkeley.edu/edc/bjc-r/img/5-algorithms/img_flipping-a-coin/Tails.png'><br>Tails won!<center>";
	}
    ?>
    </body>
</html>
