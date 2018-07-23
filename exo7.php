<?php
function binaire($n,$i){
	if($i=="homme" && $n>=18){
		echo "Vous êtes un homme et vous êtes majeur\n";
	}else if($i=="homme" && $n<18){
		echo "Vous êtes un homme et vous êtes mineur\n";
	}else if($i=="femme" && $n>=18){
		echo "Vous êtes une femme et vous êtes majeur\n";
	}else if($i=="femme" && $n<18){
		echo "Vous êtes une femme et vous êtes mineur\n";
	}else{
		echo "Veuillez choisir uniquement dans cet ordre age + homme/femme\n";
	}
}
binaire(15,"femme");
?>