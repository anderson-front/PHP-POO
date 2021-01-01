<?php

// criando arquivo
$fp = fopen("cancelamento_acj.txt", 'w');
if($fp == false) die("Não foi possível gerar o arquivo");

/* 
     Lendo o arquivo Pode ser que você não queira deletar o conteúdo mas 
   acrescentar mais informações quando o arquivo já existir
   Use o modo ‘r+’ para ativar também a escrita junto com a leitura. 
   Dessa forma, como o ponteiro é posicionado no início do arquivo, 
   o novo conteúdo ficará no início e não no final.
*/

$arquivo = fopen('arquivo.txt', 'w');
   if($arquivo == false) 
   echo "Não foi possível criar o Arquivo!";
   else{
       echo "arquivo criado corretamente";
   }


// Cria um arquivo e posiciona o ponteiro no final do arquivo 'a'    
$arquivo = fopen('arquivo.txt', 'a');
if ($arquivo == false)
    echo "Gerar o Arquivo!";
else {
    echo "Ponteiro colocado no final do arquivo";
}


$arquivo = fopen('arquivo.txt','r');
if(!$arquivo) 
   echo "Não foi possível Ler o Arquivo!";
   else{
       $linha =  fgets($arquivo,1000);
       echo $linha;
       fclose($arquivo);

   }
// Lendo todo o arquivo com um loop infinido e 
// um controle de if para quando chegar ao final do arquivo

$arquivo = fopen("arquivo.txt","r");
if(!$arquivo){
    echo "Arquivo não encontrado";
}else{
    while(true){
        $linha = fgets($arquivo);
       // if($linha == null) break;
        echo $linha;

    }

    fclose($arquivo);
}

/*Lendo todo o arquivo com feof (f-End-Of-File), função só indicada para ler arquivo*/

$arquivo = fopen("arquivo.txt", "r");
if (!$arquivo) {
    echo "Arquivo não encontrado";
} else {
    while (!feof($arquivo)) {

        echo fgets($arquivo) . '<br>';
    }

    fclose($arquivo);
}


//LENDO TODO ARQUIVO DE UMA VEZ NÃO RECOMENDADO

$arquivo = fopen("arquivo.txt", "r");
if(!$arquivo){
    echo "O arquivo não foi encontrado .";
}else{
   $string = file_get_contents("arquivo.txt");  
   echo $string;
}
fclose($arquivo);

//ESCREVENDO NO ARQUIVO COM MODO DE CRIAR O ARQUIVO

$arquivo = fopen("arquivo.txt", "w+");

if ($arquivo) {
    if (!fwrite($arquivo, 'Mais um conteudo')) die("Não foi possivel atualizar o arquivo!");
    echo "Arquivo atualizado";
    fclose($arquivo);
}



//ESCREVENDO NO ARQUIVO  NO FINAL DO FRASE E COLOCAR O PONTEIRO NO INICIO POR CONTA DA FUNÇÃO rewind

$arquivo = fopen("arquivo.txt", "r+");
rewind($arquivo);
if ($arquivo) {
    if (!fwrite($arquivo, '. Iremos atualizar a frase.')) die("Não foi possivel atualizar o arquivo!");
    echo "Arquivo atualizado";
    fclose($arquivo);
}

