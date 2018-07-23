<?php
function read($i,$n){
	if($i>$n){
		echo "Le premier nombre est plus grand \n";
	}else if($i<$n){
		echo "Le premier nombre est plus petit \n";
	}else {
		echo "Les deux nombres sont identiques \n";
	}
}
read(12,6);
read(6,12);
read(12,12);
?>