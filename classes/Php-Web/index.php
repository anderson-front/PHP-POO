<?php
include 'autoload.php';
// include 'Compra.php';
// include 'Produto.php';
// include 'Usuario.php';

$u = new Usuario();
$u->cadastrar('Anderson Santos', 35);

// $u->imprimir();

$p1 = new Produto();
$p2 = new Produto();
$p3 = new Produto();
$p4 = new Produto();
$p5 = new Produto();


$p1->cadastrar('1', 'Geladeira');
$p2->cadastrar('2', 'Fogão');
$p3->cadastrar('3', 'Sofá');
$p4->cadastrar('4', 'Tv');
$p5->cadastrar('5', 'Celular');

$c = new Compra();

$c->cadastrar(
    array(
        'p1' => $p1,
        'p2' => $p2,
        'p3' => $p3,
        'p4' => $p4,
        'p5' => $p5
    ),
    $u
);
$c->imprimir();
