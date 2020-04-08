<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

/*var_dump($nome);
var_dump($idade);
return 0;*/

if(empty($nome)) //empty se o nome estiver vazio
	{

		echo 'o nome nao pode ser vazio ,preencha novamente';
		//header( 'location: index1.php');
		return;

    }
    
    if(strlen($nome)< 3) //strlen vai contar a quantidade de caracterres que o nome deve ter
	{
		echo 'o nome deve conter mais de 3 caracteres';
		//header('location: index1.php');
		return;

    }
    if(strlen($nome) > 40)
	{
		echo 'o nome nao pode conter mais de 40 caracteres';
		//header('location: index1.php');

		return;
    }
    
    if(!is_numeric($idade))
	{
		$_SESSION['mensagem-de-erro'] = 'informe um numero para idade';
		//header('location: index1.php');
		return;

	}

if($idade >= 6 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador" .$nome. " Compete na categoria".$categorias[$i];
    }

}
else if($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador" .$nome. " Compete na categoria adolescente";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso')
            echo "O nadador" .$nome. " Compete na categoria idoso";
    }
}


