<?php

namespace Facade;

use Facade\{
	ModuloControleEstoque,
	ModuloControleClientes,
	ModuloEmail,
	ModuloApiSms
};

$moduloControleEstoque	=	new	ModuloControleEstoque();


$codigoLivro	=	'123456';
$cpfCliente	=	'12312312332';
if (!$moduloControleEstoque->validaEstoque($codigoLivro)) {
	throw new \Exception('Estoque	indisponível');
}
$moduloControleEstoque->registraRetirada(
	$codigoLivro,
	$cpfCliente
);
$moduloSms	=	new	ModuloApiSms();
$moduloControleClientes	=	new	ModuloControleClientes();
$moduloEmail	=	new	ModuloEmail();
$cliente	=	$moduloControleClientes->buscaCliente($cpfCliente);
if ($moduloEmail->validaServidorDeEmails()) {
	$moduloEmail->enviaMensagem(
		'Biblioteca	de	Teste',
		$cliente['nome'],
		$cliente['email'],
		"Aluguel	de	livro	de	código	'{$codigoLivro}'	efetuado	com
	sucesso!"
	);
}
$token	=	$moduloSms->geraTokenApi($apiKey,	$apiPass);
$moduloSms->enviaSms(
	$token,
	'Biblioteca	de	Teste',
	$cliente['nome'],
	$cliente['telefone'],
	"Aluguel	de	livro	de	código	'{$codigoLivro}'	efetuado	com	suc
esso!"
);
