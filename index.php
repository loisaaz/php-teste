<!DOCTYPE html>
<html>
<head>
<title>Tentando fazer algo</title>
</head>
<body>

<?php
print "Olaaaa";
echo "<br/>";
// variável string
$aluno = "Heloisa";
// variável do tipo número int
$idade = 16;
//decimal - float
$altura = 1.68;
//boelano 


echo " Aluno: ".$aluno." Idade: ".$idade;
echo "<br/>";
echo " Altura: ".$altura;
/*var_dump($altura);*/

/*EXERCÍCIO UM*/
        // valores digitados
        $valor1 = 100;
        $valor2 = 150;
        $valor3 = 750;

        // soma
        $soma = $valor1 + $valor2 + $valor3;
		echo "<br/>";
        echo "A soma dos valores é: " . $soma;
	echo "<br/>";
	
	/*EXERCÍCIO DOIS*/
    echo "Digite suas notas";
        $valor1 = 9;
        $valor2 = 6;
        $valor3 = 8;

$soma = $valor1 + $valor2 + $valor3 /3;

		echo "<br/>";
        echo "Sua média é: " . $soma;
		echo "<br/>";
		echo "Arredondada para 7,6";
?>
</body>
</html>