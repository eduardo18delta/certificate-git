<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//Biblioteca de geração de PDF
require('fpdf/alphapdf.php');

//Arquivo de Conexão
require('init.php');

//Resgatando váriavel do formulário
$cpf = $_POST['cpf'];

//SELECT na Base de Dados na tabela certificate
$consulta = $pdo->prepare("select * from sejaprotagonistadesuahistoria where cpf_pessoa = :cpf");
$consulta->bindParam(':cpf', $cpf, PDO::PARAM_INT);
$consulta->execute();
$total_registro = $consulta->rowCount();
$registros = $consulta->fetchAll(PDO::FETCH_OBJ);


//denifindo as variaveis resgatadas do banco de dados
foreach ($registros as $pessoa) {
	$nome_pessoa = $pessoa->nome_pessoa;
	$cpf_pessoa = $pessoa->cpf_pessoa;
	$carga_horaria = $pessoa->carga_horaria;
};

//verifica se tem o CPF informado consta na base de dados
if ($total_registro > 0) {

$pdf = new AlphaPDF();

// Orientação Landing Page ///
$pdf->AddPage('L');

$pdf->SetLineWidth(1.5);

// desenha a imagem do certificado
$pdf->Image('img/certificate.png',0,1,297);

// opacidade total
$pdf->SetAlpha(1);

// Mostrar o nome
$pdf->SetFont('Arial', '', 25); // Tipo de fonte e tamanho
$pdf->SetXY(19,110); //Parte chata onde tem que ficar ajustando a posição X e Y
$pdf->MultiCell(265, 10,$nome_pessoa, '', 'C', 0); // Tamanho width e height e posição

$pdfdoc = $pdf->Output('', 'S');

//atribui a variável $certificado com o caminho e o nome do arquivo que será salvo (vai usar o CPF digitado pelo usuário como nome de arquivo)
$certificado="arquivos/$cpf-$nome_pessoa.pdf"; 

$pdf->Output($certificado,'F'); //Salva o certificado no servidor (verifique se a pasta "arquivos" tem a permissão necessária)

$pdf->Output(); // Mostrar o certificado na tela do navegador
} else {
	//Caso CPF esteja errado mostrará essa página de Error
	include 'error.html';
}


?>
