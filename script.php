<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//var_dump($nome);
//var_dump($idade);

//validações para o nome
if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve conter mais de 3 (três) caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome deve conter até 40 (quarenta) caracteres';
    return;
}

//validações para a idade
if(!is_numeric($idade))
{
    echo 'A idade deve ser um número';
    return;
}

//teste de categoria
if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i]=='infantil')
                echo "o nadador ".$nome." compete na categoria ".$categorias[$i];
        }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i]=='adolescente')
            echo "o nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i]=='adulto')
            echo "o nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}