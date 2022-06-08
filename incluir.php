<?php
require __DIR__ . '/vendor/autoload.php';


use \App\Entity\Entrega;


if ($_POST) {
    if (isset($_POST['titulo'], $_POST['descricao'], $_POST['previsao_entrega'])) {

        $entrega = new Entrega();

        $entrega->titulo = $_POST['titulo'];
        $entrega->descricao = $_POST['descricao'];
        $entrega->previsao_entrega = $_POST['previsao_entrega'];
        $entrega->status = $_POST['status'];

        $entrega->incluir();
    } else {
        echo "não pode ter campo vazio";
    }
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
