    <title> Андриянов Максим ПИ-322</title>
	<p>Вариант 1</p>
	<?php 
     function search($u, $t) {
        if ( $u > 0 && $t > 0 )
		{return $u*$u+t;}
        elseif ( $u <= 0 && $t <= 0 )
		{return $u+$t*$t;}
        else {return $u+$t;}
    }

    $a = rand(-5, 5);
    $b = rand(-5, 5);
    $z = search($a-$b, $b*$b-$a) + search($a*$a*$b, $b*$b);
	echo "При случайных значениях A и B равными: ". $a . " и " . $b." соответственно.<br/>";
    echo "Значение z будет равно = " . $z ."";
    
    ?>